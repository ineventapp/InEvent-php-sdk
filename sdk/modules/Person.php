<?php
namespace InEvent;

class Person {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "create", $attributes);
		return $json;
	}
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "edit", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "get", $attributes);
		return $json;
	}
	public static function signIn($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "signIn", $attributes);
		return $json;
	}
	public static function externalSignIn($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "externalSignIn", $attributes);
		return $json;
	}
	public static function sendRecovery($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "sendRecovery", $attributes);
		return $json;
	}
	public static function changePassword($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "changePassword", $attributes);
		return $json;
	}
	public static function changeLevel($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "changeLevel", $attributes);
		return $json;
	}
	public static function terminate($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "terminate", $attributes);
		return $json;
	}
	public static function subscribe($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "subscribe", $attributes);
		return $json;
	}
	public static function unsubscribe($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "unsubscribe", $attributes);
		return $json;
	}
	public static function sendFeedback($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "sendFeedback", $attributes);
		return $json;
	}
}
?>