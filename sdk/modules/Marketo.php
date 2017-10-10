<?php
namespace InEvent;

class Marketo {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "get", $attributes);
		return $json;
	}
	public static function linkField($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "linkField", $attributes);
		return $json;
	}
}
?>