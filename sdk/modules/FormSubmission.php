<?php
namespace InEvent\Form;

class Submission {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("form.submission", "find", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("form.submission", "get", $attributes);
		return $json;
	}
	public static function verifyEmail($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("form.submission", "verifyEmail", $attributes);
		return $json;
	}
	public static function sendConfirmationCode($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("form.submission", "sendConfirmationCode", $attributes);
		return $json;
	}
}
?>