<?php
final class home
{
	public function __construct()
	{
		global $api;
	}

	public function init()
	{

	}

	// GET DATA

	public function getData()
	{
		global $api;

		$str = file_get_contents($api["local"]."modules/home/json/home.json");
		$json = json_decode($str, true);

		echo Common::json($json);
		return;
	}
}
?>