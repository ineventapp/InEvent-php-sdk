<?php
namespace InEvent\Billing;

class Payment {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("billing.payment", "create", $attributes);
		return $json;
	}
}
?>