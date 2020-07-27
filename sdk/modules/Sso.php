<?php
namespace InEvent;

class Sso {
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("sso", "edit", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("sso", "get", $attributes);
		return $json;
	}
	public static function linkAccount($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("sso", "linkAccount", $attributes);
		return $json;
	}
	public static function unlinkAccount($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("sso", "unlinkAccount", $attributes);
		return $json;
	}
}
?>