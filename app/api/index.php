<?php

error_reporting(1);
require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'app.engine.php');

// default class & method from ./engine.php
$loaded = Common::loadModule($class, $method);

?>