<?php
namespace InEvent;

class Chatter {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("chatter", "get", $attributes);
		return $json;
	}
	public static function unlink($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("chatter", "unlink", $attributes);
		return $json;
	}
	public static function getCommunities($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("chatter", "getCommunities", $attributes);
		return $json;
	}
	public static function getGroups($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("chatter", "getGroups", $attributes);
		return $json;
	}
	public static function setCommunity($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("chatter", "setCommunity", $attributes);
		return $json;
	}
	public static function unsetCommunity($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("chatter", "unsetCommunity", $attributes);
		return $json;
	}
	public static function setGroup($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("chatter", "setGroup", $attributes);
		return $json;
	}
	public static function unsetGroup($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("chatter", "unsetGroup", $attributes);
		return $json;
	}
}
?>