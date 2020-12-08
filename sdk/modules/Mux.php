<?php
namespace InEvent;

class Mux {
	public static function createDirectUpload($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("mux", "createDirectUpload", $attributes);
		return $json;
	}
}
?>