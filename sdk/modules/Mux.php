<?php
namespace InEvent;

class Mux {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("mux", "get", $attributes);
		return $json;
	}
	public static function createDirectUpload($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("mux", "createDirectUpload", $attributes);
		return $json;
	}
	public static function checkVodStatus($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("mux", "checkVodStatus", $attributes);
		return $json;
	}
	public static function checkVodStatusForAssets($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("mux", "checkVodStatusForAssets", $attributes);
		return $json;
	}
}
?>