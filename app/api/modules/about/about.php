<?php
final class about
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

		$str = file_get_contents($api["local"]."modules/about/json/about.json");
		$json = json_decode($str, true);

		echo Common::json($json);
		return;
	}
}
?>