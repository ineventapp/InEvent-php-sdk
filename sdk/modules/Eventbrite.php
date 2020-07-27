<?php
namespace InEvent;

class Eventbrite {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("eventbrite", "get", $attributes);
		return $json;
	}
	public static function linkField($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("eventbrite", "linkField", $attributes);
		return $json;
	}
}
?>