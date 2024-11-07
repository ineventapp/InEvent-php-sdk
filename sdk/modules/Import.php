<?php
namespace InEvent;

class Import {
	public static function config($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("import", "config", $attributes);
		return $json;
	}
	public static function bind($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("import", "bind", $attributes);
		return $json;
	}
}
?>