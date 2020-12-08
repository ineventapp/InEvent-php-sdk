<?php
namespace InEvent;

class Tokbox {
	public static function createDirectUpload($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("tokbox", "createDirectUpload", $attributes);
		return $json;
	}
}
?>