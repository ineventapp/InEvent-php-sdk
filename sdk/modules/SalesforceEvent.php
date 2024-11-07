<?php
namespace InEvent\Salesforce;

class Event {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce.event", "get", $attributes);
		return $json;
	}
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce.event", "edit", $attributes);
		return $json;
	}
	public static function sync($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce.event", "sync", $attributes);
		return $json;
	}
	public static function logs($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce.event", "logs", $attributes);
		return $json;
	}
	public static function getCustomLink($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce.event", "getCustomLink", $attributes);
		return $json;
	}
	public static function editCustomLink($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce.event", "editCustomLink", $attributes);
		return $json;
	}
	public static function createCampaign($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce.event", "createCampaign", $attributes);
		return $json;
	}
	public static function resetTemplateConfig($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce.event", "resetTemplateConfig", $attributes);
		return $json;
	}
}
?>