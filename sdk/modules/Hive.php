<?php
namespace InEvent;

class Hive {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("hive", "get", $attributes);
		return $json;
	}
}
?>