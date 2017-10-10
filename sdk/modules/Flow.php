<?php
namespace InEvent;

class Flow {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("flow", "find", $attributes);
		return $json;
	}
}
?>