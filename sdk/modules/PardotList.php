<?php
namespace InEvent\Pardot;

class _List {
	public static function bind($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("pardot.list", "bind", $attributes);
		return $json;
	}
	public static function dismiss($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("pardot.list", "dismiss", $attributes);
		return $json;
	}
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("pardot.list", "find", $attributes);
		return $json;
	}
	public static function setDefault($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("pardot.list", "setDefault", $attributes);
		return $json;
	}
}
?>