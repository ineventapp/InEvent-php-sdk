<?php
namespace InEvent;

class Xtag {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("xtag", "get", $attributes);
		return $json;
	}
}
?>