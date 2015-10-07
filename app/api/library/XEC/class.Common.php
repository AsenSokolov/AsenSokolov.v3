<?php

function dbg($objectToPrint, $forceDebug=false, $printToErroLog=false, $printAsVarExport=false)
{
	$ips = array('93.152.159.218', '93.152.129.169', '93.152.142.93');
	
	if(!in_array($_SERVER['REMOTE_ADDR'], $ips) && !preg_match("/^192\.168\.1\.*/", $_SERVER['REMOTE_ADDR']) && !$forceDebug){
		return;
	}
	
	if($printToErroLog){
		error_log(print_r($objectToPrint, 1));
	}
	else {
		echo '/* <pre>';
		if($printAsVarExport){
			var_export($objectToPrint);
		}
		else{
			print_r($objectToPrint);
		}
		echo '</pre> */';
	}
}
function validateCanadaZip($zip_code)
{
	$zip_code = strtoupper($zip_code);
	$zip_code = str_replace(" ", "", $zip_code);
	$zip_code = str_replace("-", "", $zip_code);

	$count = count( $zip_code);

	if(strlen($zip_code) > 6) {
		return false;
	}

	//function by Roshan Bhattara(http://roshanbh.com.np)
	if(preg_match("/^([a-ceghj-npr-tv-z]){1}[0-9]{1}[a-ceghj-npr-tv-z]{1}[0-9]{1}[a-ceghj-npr-tv-z]{1}[0-9]{1}$/i",$zip_code))
		return true;
	else
		return false;
}

function hold($param=false)
{
	$ips = array('93.152.159.218', '93.152.129.169');
	
	if(!in_array($_SERVER['REMOTE_ADDR'], $ips)){
		return;
	}
	
	dbg($param);
	die();
}

function mres($val)
{
	global $crypt;
	
	if($crypt){
		$val = $crypt->e($val);
	}

	return mysql_real_escape_string($val);
}
function mresd($val)
{
	global $crypt;
	
	if($crypt){
		$val = $crypt->d($val);
	}
	
	return $val;	
}

function GET($param, $default=""){
	return isset($_GET[$param]) ? $_GET[$param] : $default;
}
function POST($param, $default=""){
	return isset($_POST[$param]) ? $_POST[$param] : $default;
}
function COOKIE($param, $default=""){
	return isset($_COOKIE[$param]) ? $_COOKIE[$param] : $default;
}
function REQUEST($param, $default=""){
	return isset($_REQUEST[$param]) ? $_REQUEST[$param] : $default;
}
function SERVER($param, $default=""){
	return isset($_SERVER[$param]) ? $_SERVER[$param] : $default;
}

final class Common
{

	public function sendMail($to, $from, $subject, $template, $data)
	{
		global $db;
		
		ob_start();
		include(dirname(__FILE__)."/../../templates/mails/{$template}.php");
		$message = ob_get_clean();
		
		if(isset($data) && !empty($data))
		{
			foreach($data as $k=>$v){
				$message = preg_replace("/#{$k}#/i", $v, $message);
			}		
		}
		try{
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
			$headers .= "From: {$from}";
			mail($to,$subject,$message,$headers);
			
			$entered = $db->exec("
				INSERT IGNORE INTO 
					`sendEmails`
				SET	
					`to`		= '{$to}',
					`subject`	= '{$subject}',
					`html`		= '".mres($message)."',
					`error`		= ''
			");
			
		} catch (Exception $e) {
			
			$entered = $db->exec("
				INSERT IGNORE INTO 
					`sendEmails`
				SET	
					`to`		= '{$to}',
					`subject`	= '{$subject}',
					`html`		= '".mres($message)."',
					`error`		= '".$e->getMessage()."'
			");			
		}
		
		return true;
	}

	static public function addNotification($from_user_id=0,$to_user_id,$url,$msg,$type = 1,$old_payment_id=0)
	{
	    global $db;

		
		$insert = $db->exec("
			INSERT IGNORE INTO 
				`notification`
			SET
				`from_user_id`	= '".(int) $from_user_id."',
				`to_user_id`	= '".(int) $to_user_id."',
				`url`			= '".mres($url)."',
				`msg`			= '".mres($msg)."',
				`type`			= '".mres($type)."',
				`old_payment_id`= '".mres($old_payment_id)."',
				`date`			= '".date('Y-m-d H:i:s')."'
		");

		return $insert;
		
	}

	static public function pager($options, $full=false)
	{
		require_once("Pager.php");
		
		$defaults = array(
			'mode'       			=> 'Sliding',
			'urlVar'				=> 'go',
			'perPage'    			=> 25,
			'delta'      			=> 5,
			'spacesBeforeSeparator' => 1,
			'spacesAfterSeparator'	=> 1,
			'clearIfVoid' 			=> true,
			'altPage'				=> gettext('Page %d'),
			'altFirst' 				=> gettext('First page'),
            'altPrev '				=> gettext('Previous page'),
            'altNext' 				=> gettext('Next page'),
            'altLast' 				=> gettext('Last page'),
		);
		
		$params = array_merge($defaults, $options);
		$pager  = & Pager::factory($params);
		$links  = $pager->getLinks();
		
		return ($full ? $pager : $links['all']);
	}
	static public function pagerCustom($options)
	{
		
		$this_page = (int)$options['currentPage'];
		
		$max_pages = (int) ceil($options['totalItems'] / $options['perPage']);
		$display_max=(int)$options['display_max'];
		$listing = array();
		if($this_page > 1)
			$listing['prev'] = $this_page-1;
		if($this_page < $max_pages)
			$listing['next'] = $this_page+1;
		$listing['pages'] = array();
		$display_max = ($display_max==0)?$max_pages+1:$display_max;
		$start_from = $this_page;
		$t1 = $start_from-$display_max;
		$t2 = $this_page+$display_max;
		$max_pages = ($t2>$max_pages)?$max_pages:$t2;
		$start_from = ($t1 <= 0)?1:$t1;
		for($start_from;($start_from<=$max_pages) && (($t2--)>0);$start_from++)
			$listing['pages'][] = $start_from;
			
		return $listing;
 	}

	static public function setLocale($language, $ldomain, $codeset='UTF8')
	{
		global $tpl;
		
		putenv('LANG='.$language.'.'.$codeset);
		putenv('LANGUAGE='.$language.'.'.$codeset);
		
		setlocale(LC_COLLATE, $language.'.'.$codeset);
		setlocale(LC_CTYPE, $language.'.'.$codeset);
		setlocale(LC_MONETARY, $language.'.'.$codeset);
		setlocale(LC_TIME, $language.'.'.$codeset);
		setlocale(LC_NUMERIC, 'en_US.UTF-8');
		setlocale(LC_MESSAGES, $language.'.'.$codeset);
		
		bindtextdomain($ldomain, ROOT.'locale/');
		textdomain($ldomain);
		
		$_SESSION['lang'] = $language;
		
		if($tpl){
			$tpl->assign('lg', substr($language, 0, 2));
			$tpl->assign('language', $language);
		}
		
		return $language;
	}

	static public function loadModule($class, $method=false, $return=false, $params=false)
	{
		
		global $language, $ldomain;
		
		
		
		if($class == ''){
			return false;
		}
		$module = MODULES.$class.DIRECTORY_SEPARATOR.$class.'.php';
		
		if(@is_file($module))
		{
			
			include_once($module);

			$instance = new $class();
			
			if($params){
				$instance->params = &$params;
			}

			if($method)
			{
				if(method_exists($instance, $method)){
					$response = $instance->$method();
				}
				else {
					return false;
				}
			}
			else {
				$response = $instance->init();
			}
			
			if($return){
				return $response;
			}
			
			return true;
		}

		return false;
	}
	
	static public function arraySliceKeys($array, $keys, $include_empty = false, $empty = "")
	{
		$new_array = array();
		
		$keys = is_array($keys)? $keys : qw("$keys");
		
		if($include_empty){
			foreach ($keys as $key){
				$new_array[$key] = isset($array[$key])? $array[$key] : $empty;
			}
		}
		else {
			foreach($keys as $key){
				if (isset($array[$key]) && ! (empty($array[$key]) && "$array[$key]" != "0")) {
					$new_array[$key] =  $array[$key];
				}
			}
		}
		return $new_array;
	}

	static public function getUrlContent($url)
	{
		$options = array(
			CURLOPT_RETURNTRANSFER => true,     // return web page
			CURLOPT_HEADER         => false,    // don't return headers
			CURLOPT_FOLLOWLOCATION => false,     // follow redirects
			CURLOPT_ENCODING       => "",  		// handle all encodings
			CURLOPT_USERAGENT      => $_SERVER['HTTP_USER_AGENT'], 	// who am i
			CURLOPT_AUTOREFERER    => true,     // set referer on redirect
			CURLOPT_CONNECTTIMEOUT => 20,      // timeout on connect
			CURLOPT_TIMEOUT        => 20,      // timeout on response
			CURLOPT_MAXREDIRS      => 1,       // stop after 10 redirects 
		);
	
		$ch = curl_init($url);
		
		curl_setopt_array($ch, $options);
		
		$content = curl_exec($ch);
		$err     = curl_errno($ch);
		$errmsg  = curl_error($ch);
		$header  = curl_getinfo($ch);
		
		curl_close($ch);
	
		$header['errno']    = $err;
		$header['errmsg']   = $errmsg;
		$header['content']  = $content;
		
		return $header;
	}
	
	static public function distance($lat1, $lon1, $lat2, $lon2, $unit)
	{
		//echo Common::distance(32.9697, -96.80322, 29.46786, -98.53506, "M") . " Miles<br>";
		//echo Common::distance(32.9697, -96.80322, 29.46786, -98.53506, "K") . " Kilometers<br>";
		//echo Common::distance(32.9697, -96.80322, 29.46786, -98.53506, "N") . " Nautical Miles<br>";
 
		$theta = $lon1 - $lon2; 
		$dist 	= sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta)); 
		$dist 	= acos($dist); 
		$dist 	= rad2deg($dist); 
		$miles 	= $dist * 60 * 1.1515;
		$unit 	= strtoupper($unit);
		
		if($unit == "K"){
			return($miles * 1.609344); 
		} 
		elseif($unit == "N"){
			return ($miles * 0.8684);
		} 
		else {
			return $miles;
		}
	}
	
	static public function xml2array($contents, $get_attributes=1, $priority = 'ag') 
	{
		if(!$contents) return array();
	
		if(!function_exists('xml_parser_create')) {
			//print "'xml_parser_create()' function not found!";
			return array();
		}
	
		//Get the XML parser of PHP - PHP must have this module for the parser to work
		$parser = xml_parser_create('');
		xml_parser_set_option($parser, XML_OPTION_TARGET_ENCODING, "UTF-8"); # http://minutillo.com/steve/weblog/2004/6/17/php-xml-and-character-encodings-a-tale-of-sadness-rage-and-data-loss
		xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
		xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
		xml_parse_into_struct($parser, trim($contents), $xml_values);
		xml_parser_free($parser);
	
		if(!$xml_values) return;//Hmm...
			
		//return $xml_values;
		
		//Initializations
		$xml_array = array();
		$parents = array();
		$opened_tags = array();
		$arr = array();
	
		$current = &$xml_array; //Refference
	
		//Go through the tags.
		$repeated_tag_index = array();//Multiple tags with same name will be turned into an array
		foreach($xml_values as $data) {
			unset($attributes,$value);//Remove existing values, or there will be trouble
	
			//This command will extract these variables into the foreach scope
			// tag(string), type(string), level(int), attributes(array).
			extract($data);//We could use the array by itself, but this cooler.
	
			$result = array();
			$attributes_data = array();
			
			if(isset($value)) {
				if($priority == 'tag') $result = $value;
				else $result = $value; // AG FIXED :) original: $result['value'] = $value;
			}
	
			//Set the attributes too.
			if(isset($attributes) and $get_attributes) {
				foreach($attributes as $attr => $val) {
					if($priority == 'tag') $attributes_data[$attr] = $val;
					else $result['attr'][$attr] = $val; //Set all the attributes in a array called 'attr'
				}
			}
			
			//See tag status and do the needed.
			if($type == "open") {//The starting of the tag '<tag>'
				$parent[$level-1] = &$current;
				if(!is_array($current) or (!in_array($tag, array_keys($current)))) { //Insert New tag
					$current[$tag] = $result;
					if($attributes_data) $current[$tag. '_attr'] = $attributes_data;
					$repeated_tag_index[$tag.'_'.$level] = 1;
	
					$current = &$current[$tag];
	
				} else { //There was another element with the same tag name
	
					if(isset($current[$tag][0])) {//If there is a 0th element it is already an array
						$current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result;
						$repeated_tag_index[$tag.'_'.$level]++;
					} else {//This section will make the value an array if multiple tags with the same name appear together
						$current[$tag] = array($current[$tag],$result);//This will combine the existing item and the new item together to make an array
						$repeated_tag_index[$tag.'_'.$level] = 2;
						
						if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well
							$current[$tag]['0_attr'] = $current[$tag.'_attr'];
							unset($current[$tag.'_attr']);
						}
	
					}
					$last_item_index = $repeated_tag_index[$tag.'_'.$level]-1;
					$current = &$current[$tag][$last_item_index];
				}
	
			} elseif($type == "complete") { //Tags that ends in 1 line '<tag />'
				//See if the key is already taken.
				if(!isset($current[$tag])) { //New Key
					$current[$tag] = $result;
					$repeated_tag_index[$tag.'_'.$level] = 1;
					if($priority == 'tag' and $attributes_data) $current[$tag. '_attr'] = $attributes_data;
	
				} else { //If taken, put all things inside a list(array)
					if(isset($current[$tag][0]) and is_array($current[$tag])) {//If it is already an array...
	
						// ...push the new element into that array.
						$current[$tag][$repeated_tag_index[$tag.'_'.$level]] = $result;
						
						if($priority == 'tag' and $get_attributes and $attributes_data) {
							$current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data;
						}
						$repeated_tag_index[$tag.'_'.$level]++;
	
					} else { //If it is not an array...
						$current[$tag] = array($current[$tag],$result); //...Make it an array using using the existing value and the new value
						$repeated_tag_index[$tag.'_'.$level] = 1;
						if($priority == 'tag' and $get_attributes) {
							if(isset($current[$tag.'_attr'])) { //The attribute of the last(0th) tag must be moved as well
								
								$current[$tag]['0_attr'] = $current[$tag.'_attr'];
								unset($current[$tag.'_attr']);
							}
							
							if($attributes_data) {
								$current[$tag][$repeated_tag_index[$tag.'_'.$level] . '_attr'] = $attributes_data;
							}
						}
						$repeated_tag_index[$tag.'_'.$level]++; //0 and 1 index is already taken
					}
				}
	
			} elseif($type == 'close') { //End of tag '</tag>'
				$current = &$parent[$level-1];
			}
		}
		
		return($xml_array);
	}

	private function toGMT($sec) 
	{
		if($sec < 0){
			$date = abs($sec);
		}
		else {
			$date = $sec;	
		}
		
		$hms 	 = "";
		$hrs 	 = intval(intval($date) / 3600); 
		$hms 	.= str_pad($hrs, 2, "0", STR_PAD_LEFT);
		 
		$mns 	 = intval(($date / 60) % 60); 
		$hms 	.= str_pad($mns, 2, "0", STR_PAD_LEFT);
		
		if($sec >= 0){
			return '+'.$hms.' GMT';
		}
		else {
			return '-'.$hms.' GMT';
		}
	
	}
	
	static public function getTimezones()
	{
		$timezones 	= DateTimeZone::listAbbreviations();
		$records 	= array();
		
		foreach($timezones as $key => $zones)
		{
			foreach($zones as $id => $zone)
			{
				if(preg_match('/^(America|Antartica|Arctic|Asia|Atlantic|Europe|Indian|Pacific)\//', $zone['timezone_id']))
				{
					$zoneid = $zone['timezone_id'];
					$offset = $zone['offset'];
					
					list($country, $city, $sub) = explode("/", $zoneid);
					
					if($sub){
						$records[$country][$city][$zoneid] = str_replace("_", " ", $sub).' ('.self::toGMT($offset).')';
					}
					else {
						$records[$country][$zoneid] = str_replace("_", " ", $city).' ('.self::toGMT($offset).')';
					}
				}
			}
		}
		
		return $records;
	}
	
	static public function alert($message, $alone=false){

        if ($alone){
            echo '<html>
                 <head>
                 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
            echo '</head><body>';
        }

        echo "<script>alert(\"".$message."\");</script>";

        if ($alone) {
            echo '</body></html>';
        }
    }

	static public function checkDigit($number)
	{
		$odds 	= 0;
		$even 	= 0;

		for($i=strlen($number)-1; $i>=0; $i--)
		{
			if($i%2){
				$odds += (int) $number[$i] * 3;

			}
			else {
				$even +=  (int) $number[$i];
			}
		}

		$sum = 10 - (int) substr(($odds+$even), 1);

		return $number.($sum == 10 ? 0 : $sum);
	}

	static public function escapeJsArray($arr, $escapeDoubleQuotesToo=true)
	{
	    foreach ($arr as $key=>$value){
		    $arr[$key] = Common::escapeJS($value, $escapeDoubleQuotesToo);
		}
		return $arr;
	}

	static public function json($arr, $setJSONHeader=true)
	{
		if(!headers_sent() && $setJSONHeader){
			//header("Content-type: text/javascript");
		}

		if(function_exists('json_encode')) return json_encode($arr); //Lastest versions of PHP already has this functionality.
		$parts = array();
		$is_list = false;

		//Find out if the given array is a numerical array
		$keys = array_keys($arr);
		$max_length = count($arr)-1;
		if(($keys[0] == 0) and ($keys[$max_length] == $max_length)) {//See if the first key is 0 and last key is length - 1
			$is_list = true;
			for($i=0; $i<count($keys); $i++) { //See if each key correspondes to its position
				if($i != $keys[$i]) { //A key fails at position check.
					$is_list = false; //It is an associative array.
					break;
				}
			}
		}

		foreach($arr as $key=>$value) {
			if(is_array($value)) { //Custom handling for arrays
				if($is_list) $parts[] = self::json($value); /* :RECURSION: */
				else $parts[] = '"' . $key . '":' . self::json($value); /* :RECURSION: */
			} else {
				$str = '';
				if(!$is_list) $str = '"' . $key . '":';

				//Custom handling for multiple data types
				if(is_numeric($value)) $str .= $value; //Numbers
				elseif($value === false) $str .= 'false'; //The booleans
				elseif($value === true) $str .= 'true';
				else $str .= '"' . addslashes($value) . '"'; //All other things
				// :TODO: Is there any more datatype we should be in the lookout for? (Object?)

				$parts[] = $str;
			}
		}
		$json = implode(',',$parts);

		if($is_list) return '[' . $json . ']';//Return numerical JSON
		return '{' . $json . '}';//Return associative JSON
	}

	static public function unjson($string)
	{
		return json_decode($string, true);
	}

	static public function leadZeroNumber($aNumber, $intPart, $floatPart=NULL, $dec_point=NULL, $thousands_sep=NULL)
	{
		$formattedNumber = $aNumber;
		if (!is_null($floatPart)){
			$formattedNumber = number_format($formattedNumber, $floatPart, $dec_point, $thousands_sep);
		}
		$formattedNumber = str_repeat("0",($intPart + -1 - floor(log10($formattedNumber)))).$formattedNumber;
		return $formattedNumber;
	}

	static public function calcTime($diff, $array=false)
	{
		$diff = (int) $diff;

		if ($diff > 0) {
			$hours=floor($diff / 3600);
			$minutes=floor(($diff / 3600 - $hours) * 60);
			$seconds=round(((($diff / 3600 - $hours) * 60) - $minutes) * 60);
		} else {
			$hours = 0;
			$minutes = 0;
			$seconds = 0;
		}
		if ($seconds == 60) {
			$seconds = 0;
		}

		if ($minutes < 10) {
			if ($minutes < 0) {
				$minutes = 0;
			}
			$minutes = '0'.$minutes;
		}
		if ($seconds < 10) {
			if ($seconds < 0) {
				$seconds = 0;
			}
			$seconds = '0'.$seconds;
		}
		if ($hours < 10) {
			if ($hours < 0) {
				$hours = 0;
			}
			$hours = '0'.$hours;
		}
		
		if($array){
			return array($hours, $minutes, $seconds);	
		}
		
		return $hours.":".$minutes.":".$seconds;
	}

	static public function humanFileSize($size, $round=2)
	{
		$sizes = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');

		for($i=0; $size > 1024 && isset($sizes[$i+1]); $i++){
			$size /= 1024;
		}
		return round($size,$round).' '.$sizes[$i];
	}

	static public function escapeJS($str, $escapeDoubleQuotesToo=true, $nl2br=false)
	{
		$tr  = array('\\'=>'\\\\','\''=>'\\\'');
		$str = strtr($str, $tr);
		$str = preg_replace("/\r\n|\n\r|\n|\r/","\\n", $str);

		if($escapeDoubleQuotesToo){
		   $str = htmlspecialchars($str, ENT_QUOTES);
		}
		return ($nl2br ? str_replace("\n", "<br />", $str) : $str);
	}

	static public function enumToArray($table, $column, $connection=false, $appendEmpty=false, $flipAndFillWith=false)
	{
	    global $db;

		$row = $db->getRow("SHOW COLUMNS FROM {$table} LIKE ?", array($column), DB_FETCHMODE_ASSOC);

        if (DB::isError($row)) { return array(); }
        $arr = ($row ? explode("','", preg_replace("/(enum|set)\('(.+?)'\)/", "\\2", $row['Type'])) : array(''=>'None'));
		$new = array();

		if($appendEmpty){
			$new[] = '';
		}

        foreach ($arr as $k => $v)
		{
			if($flipAndFillWith !== false){
				$new[$v] = $flipAndFillWith;
			}
			else {
	            $new[$v] = $v;
			}
        }

		unset($arr);
        return $new;
	}
	
	static public function redirect($href, $where='document', $js=false)
	{
		global $tpl;
		
		if($where == 'facebook' && $tpl)
		{
			$tpl->assign('params', $js);
			$tpl->assign('redirect', $href);
			$tpl->display('templates/redirect.html');
			exit;	
		}
		
		if(headers_sent() || $js){
			echo "<script type=\"text/javascript\">".$where.".location.href='".$href."';</script>";
		}
		else{
			header("Location: ".$href."");
		}
		exit;
	}

	static public function cutText($text, $chars=100)
	{
		if(strlen($text) > $chars)
		{
			$newtext = substr($text, 0, $chars);
			return preg_replace ("{\s+\S+$}", "...", $newtext);
		}
		else{
			return $text;
		}
	}

	static public function generatePassword($length=10)
	{
		$password = "";
		$possible = "0123456789bcdfghjkmnpqrstvwxyz";
		$i = 0;

		while($i < $length)
		{
			$char = substr($possible, mt_rand(0, strlen($possible)-1), 1);
			if(!strstr($password, $char)){
				$password .= $char;
				$i++;
			}
		}
		return $password;
	}
	
		
	function getVideoTypeAndId($vid_link)
	{
	  // youtube get video id
	  if (strpos($vid_link, 'youtu'))
	  {
		// regular links
		if (preg_match('/(?<=v\=)([\w\d-_]+)/', $vid_link, $matches))
		  return array('type' => '1', 'video_id' => $matches[0]); 
		// ajax hash tag links
		else if (preg_match('([\d\w-_]+)$i', $vid_link, $matches))
		  return array('type' => '1', 'video_id' => $matches[0]);
		else
		  return FALSE;
	  }
	  // vimeo get video id
	  elseif (strpos($vid_link, 'vimeo'))
	  {
		if (preg_match('(?<=/)([\d]+)', $vid_link, $matches))
		  return array('type' => '2', 'video_id' => $matches[0]); 
		else
		  return FALSE;
	  }
	  else
		return FALSE;
	}

	
}



/**
 * Mobile Detect
 * 
 * @usage      require_once 'Mobile_Detect.php';
 *             $detect = new Mobile_Detect();
 *             $detect->isMobile() or $detect->isTablet()
 * 
 *             For more specific usage see the documentation inside the class.
 *             $detect->isAndroidOS() or $detect->isiPhone() ...
 * 
 * @license    http://www.opensource.org/licenses/mit-license.php The MIT License
 */

class Mobile_Detect {
    
    protected $detectionRules;
    protected $userAgent = null;
    protected $accept = null;
    // Assume the visitor has a desktop environment.
    protected $isMobile = false;
    protected $isTablet = false;
    protected $phoneDeviceName = null;
    protected $tabletDevicename = null;
    protected $operatingSystemName = null;
    protected $userAgentName = null;
    // List of mobile devices (phones)
    protected $phoneDevices = array(     
            'iPhone' => '(iPhone.*Mobile|iPod|iTunes)',            
            'BlackBerry' => 'BlackBerry|rim[0-9]+',
            'HTC' => 'HTC|Desire',
            'Nexus' => 'Nexus One|Nexus S',
            'DellStreak' => 'Dell Streak',
            'Motorola' => '\bDroid\b.*Build|HRI39|MOT\-',
            'Samsung' => 'Samsung|GT-P1000|SGH-T959D',
            'Sony' => 'E10i',
            'Asus' => 'Asus.*Galaxy',
            'Palm' => 'PalmSource|Palm', // avantgo|blazer|elaine|hiptop|plucker|xiino
            'GenericPhone' => '(mmp|pocket|psp|symbian|Smartphone|smartfon|treo|up.browser|up.link|vodafone|wap|nokia|Series40|Series60|S60|SonyEricsson|N900|\bPPC\b|MAUI.*WAP.*Browser)'
    );
    // List of tablet devices.
    protected $tabletDevices = array(
        'BlackBerryTablet' => 'PlayBook|RIM Tablet',
        'iPad' => 'iPad.*Mobile',
        'Kindle' => 'Kindle|Silk.*Accelerated',
        'SamsungTablet' => 'SCH\-I800|GT\-P1000',
        'MotorolaTablet' => 'xoom|sholest',
        'AsusTablet' => 'Transformer|TF101',
        'GenericTablet' => 'Tablet|ViewPad7|LG\-V909|MID7015|BNTV250A|LogicPD Zoom2|\bA7EB\b|CatNova8|A1_07|CT704|CT1002|\bM721\b',
    );
    // List of mobile Operating Systems.
    protected $operatingSystems = array(
        'AndroidOS' => '(android.*mobile|android(?!.*mobile))',
        'BlackBerryOS' => '(blackberry|rim tablet os)',
        'PalmOS' => '(avantgo|blazer|elaine|hiptop|palm|plucker|xiino)',
        'SymbianOS' => 'Symbian|SymbOS|Series60|Series40|\bS60\b',
        'WindowsMobileOS' => 'IEMobile|Windows Phone|Windows CE.*(PPC|Smartphone)|MSIEMobile|Window Mobile|XBLWP7',
        'iOS' => '(iphone|ipod|ipad)',
        'FlashLiteOS' => '',
        'JavaOS' => '',
        'NokiaOS' => '',
        'webOS' => '',
        'badaOS' => '',
        'BREWOS' => '',
    );
    // List of mobile User Agents.
    protected $userAgents = array(      
      'Chrome' => '\bCrMo\b',
      'Dolfin' => 'Dolfin',
      'Opera' => '(Opera.*Mini|Opera.*Mobi)',  
      'Skyfire' => 'skyfire',      
      'IE' => 'ie*mobile',
      'Firefox' => 'fennec|firefox.*maemo',
      'Bolt' => 'bolt',
      'TeaShark' => 'teashark',
      'Blazer' => 'Blazer',
      'Safari' => 'Mobile*Safari',
      'Midori' => 'midori',
      'GenericBrowser' => 'NokiaBrowser|OviBrowser'
    );
    
    function __construct(){
        
        // Merge all rules together.
        $this->detectionRules = array_merge(
                                            $this->phoneDevices, 
                                            $this->tabletDevices, 
                                            $this->operatingSystems, 
                                            $this->userAgents
                                            );
        $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
        $this->accept = $_SERVER['HTTP_ACCEPT'];  
        
        if (
		isset($_SERVER['HTTP_X_WAP_PROFILE']) ||
                isset($_SERVER['HTTP_X_WAP_CLIENTID']) ||
                isset($_SERVER['HTTP_WAP_CONNECTION']) ||
		isset($_SERVER['HTTP_PROFILE']) ||
		isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']) || // Reported by Nokia devices (eg. C3)
                isset($_SERVER['HTTP_X_NOKIA_IPADDRESS']) ||
                isset($_SERVER['HTTP_X_NOKIA_GATEWAY_ID']) ||
                isset($_SERVER['HTTP_X_ORANGE_ID']) ||
                isset($_SERVER['HTTP_X_VODAFONE_3GPDPCONTEXT']) ||
                isset($_SERVER['HTTP_X_HUAWEI_USERID']) ||
                isset($_SERVER['HTTP_UA_OS']) || // Reported by Windows Smartphones
                @$_SERVER['HTTP_UA_CPU'] == 'ARM' // Seen this on a HTC
		) {
                $this->isMobile = true;
        } elseif (!empty($this->accept) && (strpos($this->accept, 'text/vnd.wap.wml') !== false || strpos($this->accept, 'application/vnd.wap.xhtml+xml') !== false)) {
                $this->isMobile = true;
        } else {
                $this->_detect();
        }        
        
    }
	
    public function getRules()
    {
        return $this->detectionRules;
    }
    
    /**
     * 
     * @method boolean isiPhone()
     * @method boolean isBlackBerry()
     * @method boolean isHTC()
     * @method boolean isNexus()
     * @method boolean isDellStreak()
     * @method boolean isMotorola()
     * @method boolean isSamsung()
     * @method boolean isSony()
     * @method boolean isAsus()
     * @method boolean isPalm()
     *
     * @method boolean isBlackBerryTablet()
     * @method boolean isiPad()
     * @method boolean isKindle()
     * @method boolean isSamsungTablet()
     * @method boolean isMotorolaTablet()
     * @method boolean isAsusTablet()
     *       
     * @method boolean isAndroidOS()
     * @method boolean isBlackBerryOS()
     * @method boolean isPalmOS()
     * @method boolean isSymbianOS()
     * @method boolean isWindowsMobileOS()
     * @method boolean isiOS()
     * 
     * @method boolean isChrome()
     * @method boolean isDolfin()
     * @method boolean isOpera()
     * @method boolean isSkyfire()
     * @method boolean isIE()
     * @method boolean isFirefox()
     * @method boolean isBolt()
     * @method boolean isTeaShark()
     * @method boolean isBlazer()
     * @method boolean isSafari()
     * @method boolean isMidori()
     *   
     * @param string $name
     * @param array $arguments
     * @return mixed 
     */
    public function __call($name, $arguments)
    {
                
        $key = substr($name, 2);
        return $this->_detect($key);
        
    }
	
    private function _detect($key='')
    {

        if(empty($key)){ 

			//$fh = fopen("user_agent.txt", 'w') or die("can't open file");
			//fwrite($fh, "{$this->userAgent}\n");fclose($fh);			
			
            // Begin general search.
            foreach($this->detectionRules as $_key => $_regex){
                if(empty($_regex)){ continue; }
                if(preg_match('/'.$_regex.'/is', $this->userAgent)){
                    $this->isMobile = true;
                    return true;
                } 
            }
            return false;

        } else {
            
            // Search for a certain key.
            // Make the keys lowecase so we can match: isIphone(), isiPhone(), isiphone(), etc.
            $key = strtolower($key);
            $_rules = array_change_key_case($this->detectionRules);
            
            if(array_key_exists($key, $_rules)){
                if(empty($_rules[$key])){ return null; }
                if(preg_match('/'.$_rules[$key].'/is', $this->userAgent)){
                    $this->isMobile = true;
                    return true;
                } else {
                    return false;
                }           
            } else {
                trigger_error("Method $name is not defined", E_USER_WARNING);
            }	

        }

    }
        
    /**
    * Returns true if any type of mobile device detected, including special ones
    * @return bool
    */
    public function isMobile()
    {
            return $this->isMobile;
    } 
    
    /**
     * Return true if any type of tablet device is detected.
     * @return boolean 
     */
    public function isTablet()
    {
        
        foreach($this->tabletDevices as $_key => $_regex){
            if(preg_match('/'.$_regex.'/is', $this->userAgent)){
                $this->isTablet = true;
                return true;
            }
        }
        
        return false;        
            
    }
    
    
}
?>