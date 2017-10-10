<?php
namespace InEvent;

class Linkedin {
	public static function signIn($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("linkedin", "signIn", $attributes);
		$client->token->tokenID = $json["data"][0]["tokenID"];
		return $json;
	}
	public static function update($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("linkedin", "update", $attributes);
		return $json;
	}
	public static function generate($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("linkedin", "generate", $attributes);
		return $json;
	}
}
?>