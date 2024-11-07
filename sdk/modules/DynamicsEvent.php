<?php
namespace InEvent\Dynamics;

class Event {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("dynamics.event", "get", $attributes);
		return $json;
	}
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("dynamics.event", "edit", $attributes);
		return $json;
	}
	public static function sync($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("dynamics.event", "sync", $attributes);
		return $json;
	}
	public static function createAndExport($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("dynamics.event", "createAndExport", $attributes);
		return $json;
	}
	public static function errorLogs($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("dynamics.event", "errorLogs", $attributes);
		return $json;
	}
}
?>