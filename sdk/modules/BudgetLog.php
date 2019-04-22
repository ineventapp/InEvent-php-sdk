<?php
namespace InEvent\Budget;

class Log {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("budget.log", "find", $attributes);
		return $json;
	}
}
?>