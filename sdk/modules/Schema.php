<?php
namespace InEvent;

class Schema {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("schema", "get", $attributes);
		return $json;
	}
}
?>