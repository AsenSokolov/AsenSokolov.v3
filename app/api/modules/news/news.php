<?php
final class news
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

		$filename = $_GET["name"];

		$str = file_get_contents($api["local"].'modules/news/json/'.$filename.".json");
		$json = json_decode($str, true);

		echo Common::json($json);
		return;
	}
}
?>