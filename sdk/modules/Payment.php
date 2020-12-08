<?php
namespace InEvent;

class Payment {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("payment", "create", $attributes);
		return $json;
	}
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("payment", "find", $attributes);
		return $json;
	}
	public static function approve($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("payment", "approve", $attributes);
		return $json;
	}
	public static function reject($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("payment", "reject", $attributes);
		return $json;
	}
	public static function requestRefund($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("payment", "requestRefund", $attributes);
		return $json;
	}
	public static function cancelRefundRequest($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("payment", "cancelRefundRequest", $attributes);
		return $json;
	}
	public static function approveRefund($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("payment", "approveRefund", $attributes);
		return $json;
	}
	public static function rejectRefund($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("payment", "rejectRefund", $attributes);
		return $json;
	}
	public static function stats($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("payment", "stats", $attributes);
		return $json;
	}
}
?>