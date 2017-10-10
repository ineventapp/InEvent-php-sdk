<?php
namespace InEvent;

class File {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("file", "create", $attributes);
		return $json;
	}
}
?>