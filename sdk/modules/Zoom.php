<?php
namespace InEvent;

class Zoom {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("zoom", "get", $attributes);
		return $json;
	}
	public static function linkAccount($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("zoom", "linkAccount", $attributes);
		return $json;
	}
	public static function unlinkAccount($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("zoom", "unlinkAccount", $attributes);
		return $json;
	}
}
?>