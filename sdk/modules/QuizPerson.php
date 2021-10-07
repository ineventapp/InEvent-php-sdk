<?php
namespace InEvent\Quiz;

class Person {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("quiz.person", "find", $attributes);
		return $json;
	}
}
?>