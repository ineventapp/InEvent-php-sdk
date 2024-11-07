<?php
namespace InEvent;

class Pardot {
	public static function isEnabled($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("pardot", "isEnabled", $attributes);
		return $json;
	}
	public static function listForms($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("pardot", "listForms", $attributes);
		return $json;
	}
	public static function listLists($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("pardot", "listLists", $attributes);
		return $json;
	}
}
?>