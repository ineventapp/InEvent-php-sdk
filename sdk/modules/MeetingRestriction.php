<?php
namespace InEvent\Meeting;

class Restriction {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("meeting.restriction", "create", $attributes);
		return $json;
	}
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("meeting.restriction", "find", $attributes);
		return $json;
	}
	public static function remove($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("meeting.restriction", "remove", $attributes);
		return $json;
	}
	public static function removeAll($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("meeting.restriction", "removeAll", $attributes);
		return $json;
	}
	public static function allRestrictions($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("meeting.restriction", "allRestrictions", $attributes);
		return $json;
	}
}
?>