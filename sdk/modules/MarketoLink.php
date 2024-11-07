<?php
namespace InEvent\Marketo;

class Link {
	public static function bind($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "bind", $attributes);
		return $json;
	}
	public static function operate($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "operate", $attributes);
		return $json;
	}
	public static function dismiss($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "dismiss", $attributes);
		return $json;
	}
	public static function createProgram($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "createProgram", $attributes);
		return $json;
	}
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "find", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "get", $attributes);
		return $json;
	}
	public static function sync($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "sync", $attributes);
		return $json;
	}
	public static function syncTokens($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "syncTokens", $attributes);
		return $json;
	}
	public static function syncStatuses($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "syncStatuses", $attributes);
		return $json;
	}
	public static function setActivitySync($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "setActivitySync", $attributes);
		return $json;
	}
	public static function setActivitySyncForActivity($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "setActivitySyncForActivity", $attributes);
		return $json;
	}
	public static function syncActivity($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo.link", "syncActivity", $attributes);
		return $json;
	}
}
?>