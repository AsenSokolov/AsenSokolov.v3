<?php
final class rates
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

		$str = file_get_contents($api["local"]."modules/rates/json/rates.json");
		$json = json_decode($str, true);

		echo Common::json($json);
		return;
	}
}
?>