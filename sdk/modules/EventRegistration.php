<?php
namespace InEvent\Event;

class Registration {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.registration", "find", $attributes);
		return $json;
	}
}
?>