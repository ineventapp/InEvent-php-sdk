<?php
namespace InEvent;

class Event {
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event", "edit", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event", "get", $attributes);
		return $json;
	}
	public static function checkAccessCode($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event", "checkAccessCode", $attributes);
		return $json;
	}
	public static function sendSMS($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event", "sendSMS", $attributes);
		return $json;
	}
	public static function search($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event", "search", $attributes);
		return $json;
	}
	public static function emailDnsStatus($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event", "emailDnsStatus", $attributes);
		return $json;
	}
	public static function aiRequest($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event", "aiRequest", $attributes);
		return $json;
	}
	public static function report($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event", "report", $attributes);
		return $json;
	}
}
?>