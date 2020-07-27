<?php
namespace InEvent;

class Salesforce {
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce", "get", $attributes);
		return $json;
	}
	public static function getCampaigns($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce", "getCampaigns", $attributes);
		return $json;
	}
	public static function getLeadLists($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce", "getLeadLists", $attributes);
		return $json;
	}
	public static function getContactLists($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce", "getContactLists", $attributes);
		return $json;
	}
	public static function getPeople($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce", "getPeople", $attributes);
		return $json;
	}
	public static function getFields($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce", "getFields", $attributes);
		return $json;
	}
	public static function importPeople($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce", "importPeople", $attributes);
		return $json;
	}
	public static function exportPeople($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce", "exportPeople", $attributes);
		return $json;
	}
	public static function unlink($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce", "unlink", $attributes);
		return $json;
	}
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("salesforce", "edit", $attributes);
		return $json;
	}
}
?>