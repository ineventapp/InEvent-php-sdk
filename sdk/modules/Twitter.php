<?php
namespace InEvent;

class Twitter {
	public static function signIn($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("twitter", "signIn", $attributes);
		if (isset($json["body"]["data"])  && count($json["body"]["data"]) > 0) {
			$client->setTokenID($json["body"]["data"][0]["tokenID"]);
		}
		return $json;
	}
}
?>