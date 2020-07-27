<?php
namespace InEvent\Beacon;

class Log {
	public static function bind($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("beacon.log", "bind", $attributes);
		return $json;
	}
	public static function count($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("beacon.log", "count", $attributes);
		return $json;
	}
}
?>