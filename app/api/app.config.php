<?php
defined('ROOT') or define('ROOT', dirname(__FILE__).'/');

define('PROTOCOL', ($_SERVER['HTTPS'] != '' ? 'https://' : 'http://'));
define('PROJECT',  isset($_SERVER['PROJECT']) ? $_SERVER['PROJECT'] : '/app/api/');

$dsn 				 = 'mysql://root:root@localhost/asensokolov.dev';
$api['local']	 	 = PROTOCOL.'asensokolov.dev'.PROJECT;

// app specific configuration
$cfg = array();

?>
