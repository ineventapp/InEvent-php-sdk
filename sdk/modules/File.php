<?php
namespace InEvent;

class File {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("file", "create", $attributes);
		return $json;
	}
	public static function crop($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("file", "crop", $attributes);
		return $json;
	}
	public static function generateUploadUrl($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("file", "generateUploadUrl", $attributes);
		return $json;
	}
}
?>