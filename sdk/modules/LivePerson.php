<?php
namespace InEvent\Live;

class Person {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.person", "find", $attributes);
		return $json;
	}
	public static function forceUnpublish($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.person", "forceUnpublish", $attributes);
		return $json;
	}
	public static function keepAlive($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.person", "keepAlive", $attributes);
		return $json;
	}
	public static function analyticsFind($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.person", "analyticsFind", $attributes);
		return $json;
	}
	public static function analyticsGet($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.person", "analyticsGet", $attributes);
		return $json;
	}
	public static function sessionHistory($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.person", "sessionHistory", $attributes);
		return $json;
	}
}
?>