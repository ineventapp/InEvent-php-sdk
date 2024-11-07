<?php
namespace InEvent;

class Crm {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("crm", "find", $attributes);
		return $json;
	}
	public static function import($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("crm", "import", $attributes);
		return $json;
	}
	public static function export($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("crm", "export", $attributes);
		return $json;
	}
	public static function findCampaigns($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("crm", "findCampaigns", $attributes);
		return $json;
	}
}
?>