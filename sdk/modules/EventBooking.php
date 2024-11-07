<?php
namespace InEvent\Event;

class Booking {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.booking", "create", $attributes);
		return $json;
	}
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.booking", "edit", $attributes);
		return $json;
	}
	public static function authorize($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.booking", "authorize", $attributes);
		return $json;
	}
	public static function reject($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.booking", "reject", $attributes);
		return $json;
	}
	public static function assignOwner($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.booking", "assignOwner", $attributes);
		return $json;
	}
}
?>