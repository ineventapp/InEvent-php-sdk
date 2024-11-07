<?php
namespace InEvent\Map;

class Group {
	public static function bind($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map.group", "bind", $attributes);
		return $json;
	}
	public static function operate($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map.group", "operate", $attributes);
		return $json;
	}
	public static function dismiss($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map.group", "dismiss", $attributes);
		return $json;
	}
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map.group", "find", $attributes);
		return $json;
	}
}
?>