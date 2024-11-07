<?php
namespace InEvent;

class Ai {
	public static function prompt($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("ai", "prompt", $attributes);
		return $json;
	}
}
?>