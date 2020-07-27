<?php
namespace InEvent;

class Analytics {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("analytics", "get", $attributes);
		return $json;
	}
}
?>