<?php
namespace InEvent\Live;

class Studio {
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("live.studio", "edit", $attributes);
		return $json;
	}
}
?>