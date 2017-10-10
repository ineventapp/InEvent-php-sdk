<?php
namespace InEvent;

class Twitter {
	public static function signIn($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("twitter", "signIn", $attributes);
		$client->token->tokenID = $json["data"][0]["tokenID"];
		return $json;
	}
}
?>