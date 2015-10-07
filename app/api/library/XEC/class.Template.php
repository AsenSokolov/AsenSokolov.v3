<?php
final class Template extends Smarty
{
	public function __construct()
	{
		global $tpl;
		
		parent::__construct();
		
		if(preg_match("/^Smarty\-3/", $this->_version))
		{
			self::registerResource("part", array(
				array($this, 'part_get_template'),
				array($this, 'part_get_timestamp'),
				array($this, 'part_get_secure'),
				array($this, 'part_get_trusted')
			));
		}
		else {
			self::register_resource("part", array($this, "part_get_template", "part_get_timestamp", "part_get_secure", "part_get_trusted"));
		}
	}
	
	public function part($tpl, $part, $toJsonParts=false, $fetch=false)
	{
		$html = self::fetch('part:'.$part.':'.$tpl);
		
		if(!AJAX)
		{
			if($fetch){
				return $html;
			}
			
			echo $html;
			return;
		}

        //tmpbg($html);
		
		if(!$toJsonParts)
		{
			return $html;
		}
		else {
			
			$response = self::splitToParts($html);
			
			if($fetch){
				return $response;
			}
			else {
				echo Common::json($response);
			}
		}
	}
	
	public function splitToParts($html, $t=false)
	{
		global $memcache;
		
		$bt   = debug_backtrace();
		$key  = $bt[2]['class'].'_'.$bt[2]['function'];
		$exp  = 2592000;// 30 days;
		
		preg_match_all("/<script.*>(.*)<\/script>/Uis", $html, $jsc);
        preg_match_all('/<style[^>]*>(.*)<\/style>/Uis', $html, $css);

		$scripts = array();
		$styles  = array();

		$mc      = FALSE;
        $memKey  = '';
        $memVal  = '';

        foreach($jsc[0] as $k => $s)
		{
			$html = str_replace($s, "", $html);
			
			preg_match('/script\s+src="(.*)"/Uis', $s, $src);
			
			if($src[1] != ''){
				$scripts[] 	= array('src' => $src[1]);
			}
			else {
				$scripts[] 	= array('src' => '/static/'.$key.$k.'.js');
			
				$memKey = session_id().'_'.$key.$k.'.js';
				/*$memVal = str_replace('<script>', "", $jsc[0][$k]);
				$memVal = str_replace('</script>', "", $memVal);*/
				$memVal = $jsc[1][$k];
				
				// JS Packer
				$jsPacker = new JavaScriptPacker($memVal);
				//$memVal   = $jsPacker->pack();
				
				$memcache->delete($memKey);
				$mc = $memcache->add($memKey, $memVal);
				if($mc == false){
					$mc = $memcache->set($memKey, $memVal, true, $exp);
				}
			}
		}
        
        $replace = FALSE;
		$memKey  = '';
        $memVal  = '';

		foreach($css[0] as $k => $s)
		{
			$html 		= str_replace($s, "", $html);
			$styles[] 	= array('src' => '/static/'.$key.$k.'.css');
			
			$memKey = session_id().'_'.$key.$k.'.css';
			$memVal = str_replace('<style>', "", $css[0][$k]);
			$memVal = str_replace('</style>', "", $memVal);

            $memcache->delete($memKey);
			$replace = $memcache->add($memKey, $memVal);
			if($replace == false){
				$setter = $memcache->set($memKey, $memVal, true, $exp);
			}
		}
        
		$response['payload']['html'] = $html;
		$response['payload']['jsc']  = $scripts;
		$response['payload']['css']  = $styles;

		return $response;
	}
	
	public function json($tpl, $fetch=false)
	{
		$html = self::fetch($tpl);
		
		if(!AJAX){
			if($fetch){
				return $html;
			}
			echo $html;
			return;
		}
		
		$response = self::splitToParts($html, $tpl);
		
		if($fetch){
			return $response;
		}
		else {
			echo Common::json($response);
		}
	}
	
	public function part_get_template($tpl_name, &$tpl_source, &$smarty_obj)
	{
		list($part, $tpl) = explode(":", $tpl_name);
		
		$html = file_get_contents($tpl);
		$spar = preg_quote("<!-- s:".$part." -->");
		$epar = preg_quote("<!-- e:".$part." -->");
		
		preg_match("/".$spar."(.*)".$epar."/Uis", $html, $parts);
		
		$tpl_source = trim($parts[1]);
		return true;
	}
	
	public function part_get_timestamp($tpl_name, &$tpl_timestamp, &$smarty_obj)
	{
		$tpl_timestamp = time();
		return true;
	}
	
	public function part_get_secure($tpl_name, &$smarty_obj)
	{
		return true;
	}
	
	public function part_get_trusted($tpl_name, &$smarty_obj)
	{
	}
}


?>