<?php
namespace InEvent;

class Daemon {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("daemon", "find", $attributes);
		return $json;
	}
	public static function bulk($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("daemon", "bulk", $attributes);
		return $json;
	}
}
?>