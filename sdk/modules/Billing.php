<?php
namespace InEvent;

class Billing {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("billing", "find", $attributes);
		return $json;
	}
}
?>