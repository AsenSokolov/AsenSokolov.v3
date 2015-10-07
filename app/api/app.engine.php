<?php
ini_set('session.use_trans_sid', true);
header('P3P: CP="IDC DSP COR ADM DEVi TAIi PSA PSD IVAi IVDi CONi HIS OUR IND CNT"');
session_start();
require_once('app.config.php');

if(get_magic_quotes_gpc())
{
    $in = array(&$_GET, &$_POST, &$_COOKIE, &$_REQUEST);
    while(list($k,$v) = each($in)){
        foreach($v as $key => $val){
            if(!is_array($val)){
                $in[$k][$key] = stripslashes($val);
                continue;
            }
            $in[] =& $in[$k][$key];
        }
    }
    unset($in);
}
define('ROOT', 		$_SERVER['DOCUMENT_ROOT'].(PROJECT ? PROJECT : ''));
define('CACHE', 	dirname(__FILE__).DIRECTORY_SEPARATOR. 'cache' .DIRECTORY_SEPARATOR);
define('LIBRARY', 	dirname(__FILE__).DIRECTORY_SEPARATOR.'library'.DIRECTORY_SEPARATOR);
define('MODULES', 	dirname(__FILE__).DIRECTORY_SEPARATOR.'modules'.DIRECTORY_SEPARATOR);
define('UPLOADS', 	dirname(__FILE__).DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR);

ini_set("include_path", '.:'.LIBRARY.':'.LIBRARY.'PEAR'.':'.LIBRARY.'XEC'.':'.LIBRARY.'WideImage');
ini_set('default_charset', 'UTF-8');
try{
	require_once('MDB2.php');
	require_once('class.Common.php');
	require_once('class.Crypt.php');
} 
catch(Exception $e)
{
	echo $e->getMessage();
	exit;	
}

## DB CONNECTION ##
if($dsn)
{
	$db =& MDB2::connect($dsn, array('portability' => MDB2_PORTABILITY_NONE));
	if(PEAR::isError($db)){
		exit("Database error: Can't connect to main database!");
	}
	else {
		$db->setFetchMode(MDB2_FETCHMODE_ASSOC);
		$db->loadModule('Extended');
		$db->query("SET NAMES UTF8");
		$db->query("SET SESSION time_zone = '+0:00'");
	}
}

## REWRITE MODULE ##
function parseRewriteAddress($address)
{
	$ret['navrequest'] 	= array();
	$ret['rawrequest'] 	= @parse_url($address);
	$ret['rawmodule']  	= basename($ret['rawrequest']['path'], '.html');
	$ret['isDirect'] 	= preg_match("/(\.view|\.php)$/", $ret['rawrequest']['path']);
	
	$pathinfo 			= pathinfo($ret['rawrequest']['path']);
	$ret['requesturl']	= $pathinfo['dirname'].DIRECTORY_SEPARATOR.$pathinfo['filename'];
	$ret['htrequest'] 	= explode("/", urldecode(substr($ret['requesturl'], 1)));
	
	parse_str($ret['rawrequest']['query'], $_GET);
	
	foreach($ret['htrequest'] as $key => $value){
		if($value != ''){
			array_push($ret['navrequest'], $value);
		}
	}
	
	if(PROJECT != '/'){
		array_shift($ret['navrequest']);	
	}
	
	return $ret;
}

$uriParser 	= parseRewriteAddress($_SERVER['REQUEST_URI']);
$navrequest = $uriParser['navrequest'];
$rawrequest = $uriParser['rawrequest'];

$class = 'index';
if(sizeof($navrequest) > 0){
	$class 	= $navrequest[1];
	$method = $navrequest[2];
}
?>