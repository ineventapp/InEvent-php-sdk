<?php
namespace InEvent\Webhook;

class Log {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("webhook.log", "find", $attributes);
		return $json;
	}
}
?>