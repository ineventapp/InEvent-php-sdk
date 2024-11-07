<?php
namespace InEvent\Map;

class Item {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map.item", "create", $attributes);
		return $json;
	}
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map.item", "edit", $attributes);
		return $json;
	}
	public static function remove($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map.item", "remove", $attributes);
		return $json;
	}
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map.item", "find", $attributes);
		return $json;
	}
	public static function favorite($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("map.item", "favorite", $attributes);
		return $json;
	}
}
?>