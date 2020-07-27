<?php
namespace InEvent;

class Stripe {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("stripe", "get", $attributes);
		return $json;
	}
	public static function linkAccount($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("stripe", "linkAccount", $attributes);
		return $json;
	}
	public static function unlinkAccount($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("stripe", "unlinkAccount", $attributes);
		return $json;
	}
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("stripe", "edit", $attributes);
		return $json;
	}
}
?>