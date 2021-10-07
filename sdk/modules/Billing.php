<?php
namespace InEvent;

class Billing {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("billing", "find", $attributes);
		return $json;
	}
	public static function transfer($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("billing", "transfer", $attributes);
		return $json;
	}
}
?>