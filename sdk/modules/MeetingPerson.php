<?php
namespace InEvent\Meeting;

class Person {
	public static function bind($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("meeting.person", "bind", $attributes);
		return $json;
	}
	public static function confirm($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("meeting.person", "confirm", $attributes);
		return $json;
	}
	public static function revoke($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("meeting.person", "revoke", $attributes);
		return $json;
	}
	public static function dismiss($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("meeting.person", "dismiss", $attributes);
		return $json;
	}
	public static function checkIn($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("meeting.person", "checkIn", $attributes);
		return $json;
	}
}
?>