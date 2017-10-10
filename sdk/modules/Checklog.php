<?php
namespace InEvent;

class Checklog {
	public static function checkIn($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("checklog", "checkIn", $attributes);
		return $json;
	}
	public static function checkOut($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("checklog", "checkOut", $attributes);
		return $json;
	}
	public static function stats($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("checklog", "stats", $attributes);
		return $json;
	}
	public static function checkedIn($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("checklog", "checkedIn", $attributes);
		return $json;
	}
	public static function export($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("checklog", "export", $attributes);
		return $json;
	}
}
?>