<?php
namespace InEvent\Live;

class Recording {
	public static function remove($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.recording", "remove", $attributes);
		return $json;
	}
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.recording", "find", $attributes);
		return $json;
	}
	public static function convert($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.recording", "convert", $attributes);
		return $json;
	}
	public static function rawUpdate($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.recording", "rawUpdate", $attributes);
		return $json;
	}
	public static function rawConvert($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.recording", "rawConvert", $attributes);
		return $json;
	}
	public static function rawDelete($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.recording", "rawDelete", $attributes);
		return $json;
	}
}
?>