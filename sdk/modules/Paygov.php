<?php
namespace InEvent;

class Paygov {
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("paygov", "edit", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("paygov", "get", $attributes);
		return $json;
	}
	public static function verifyCredentials($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("paygov", "verifyCredentials", $attributes);
		return $json;
	}
	public static function doRequest($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("paygov", "doRequest", $attributes);
		return $json;
	}
}
?>