<?php
namespace InEvent;

class Map {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map", "create", $attributes);
		return $json;
	}
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map", "edit", $attributes);
		return $json;
	}
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map", "find", $attributes);
		return $json;
	}
	public static function remove($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map", "remove", $attributes);
		return $json;
	}
}
?>