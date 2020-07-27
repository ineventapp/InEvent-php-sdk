<?php
namespace InEvent\Report;

class Event {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("report.event", "create", $attributes);
		return $json;
	}
}
?>