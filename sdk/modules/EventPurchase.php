<?php
namespace InEvent\Event;

class Purchase {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.purchase", "get", $attributes);
		return $json;
	}
	public static function setConfig($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.purchase", "setConfig", $attributes);
		return $json;
	}
}
?>