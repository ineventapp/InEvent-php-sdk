<?php
namespace InEvent\Cvent;

class Event {
	public static function bind($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("cvent.event", "bind", $attributes);
		return $json;
	}
	public static function dismiss($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("cvent.event", "dismiss", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("cvent.event", "get", $attributes);
		return $json;
	}
	public static function findOnCvent($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("cvent.event", "findOnCvent", $attributes);
		return $json;
	}
	public static function getOnCvent($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("cvent.event", "getOnCvent", $attributes);
		return $json;
	}
	public static function sync($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("cvent.event", "sync", $attributes);
		return $json;
	}
}
?>