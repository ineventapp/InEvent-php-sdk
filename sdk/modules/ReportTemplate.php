<?php
namespace InEvent\Report;

class Template {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("report.template", "create", $attributes);
		return $json;
	}
}
?>