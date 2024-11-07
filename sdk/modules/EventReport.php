<?php
namespace InEvent\Event;

class Report {
	public static function personSchema($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.report", "personSchema", $attributes);
		return $json;
	}
	public static function personReport($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("event.report", "personReport", $attributes);
		return $json;
	}
}
?>