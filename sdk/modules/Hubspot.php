<?php
namespace InEvent;

class Hubspot {
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("hubspot", "edit", $attributes);
		return $json;
	}
	public static function remove($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("hubspot", "remove", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("hubspot", "get", $attributes);
		return $json;
	}
	public static function findProperties($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("hubspot", "findProperties", $attributes);
		return $json;
	}
}
?>