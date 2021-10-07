<?php
namespace InEvent;

class Api {
	public static function describe($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("api", "describe", $attributes);
		return $json;
	}
}
?>