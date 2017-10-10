<?php
namespace InEvent;

class Error {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("error", "create", $attributes);
		return $json;
	}
}
?>