<?php
namespace InEvent\Event;

class Theme {
	public static function operate($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.theme", "operate", $attributes);
		return $json;
	}
}
?>