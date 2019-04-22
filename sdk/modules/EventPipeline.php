<?php
namespace InEvent\Event;

class Pipeline {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.pipeline", "find", $attributes);
		return $json;
	}
}
?>