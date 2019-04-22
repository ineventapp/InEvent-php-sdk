<?php
namespace InEvent;

class Audit {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("audit", "find", $attributes);
		return $json;
	}
}
?>