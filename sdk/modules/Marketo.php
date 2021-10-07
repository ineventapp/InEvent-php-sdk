<?php
namespace InEvent;

class Marketo {
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "edit", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "get", $attributes);
		return $json;
	}
	public static function linkAccount($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "linkAccount", $attributes);
		return $json;
	}
	public static function unlinkAccount($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "unlinkAccount", $attributes);
		return $json;
	}
	public static function getFolders($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "getFolders", $attributes);
		return $json;
	}
	public static function getChannels($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "getChannels", $attributes);
		return $json;
	}
	public static function getLists($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "getLists", $attributes);
		return $json;
	}
	public static function getTags($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "getTags", $attributes);
		return $json;
	}
	public static function getTypes($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "getTypes", $attributes);
		return $json;
	}
	public static function getProgram($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "getProgram", $attributes);
		return $json;
	}
	public static function import($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("marketo", "import", $attributes);
		return $json;
	}
}
?>