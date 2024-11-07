<?php
namespace InEvent\Hubspot;

class Event {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("hubspot.event", "get", $attributes);
		return $json;
	}
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("hubspot.event", "edit", $attributes);
		return $json;
	}
	public static function sync($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("hubspot.event", "sync", $attributes);
		return $json;
	}
	public static function logs($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("hubspot.event", "logs", $attributes);
		return $json;
	}
	public static function createCampaign($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("hubspot.event", "createCampaign", $attributes);
		return $json;
	}
}
?>