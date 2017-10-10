<?php
namespace InEvent;

class Ip {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("ip", "get", $attributes);
		return $json;
	}
}
?>