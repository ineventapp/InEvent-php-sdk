<?php
namespace InEvent\Ticket;

class Person {
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("ticket.person", "find", $attributes);
		return $json;
	}
	public static function invite($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("ticket.person", "invite", $attributes);
		return $json;
	}
	public static function acceptInvite($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("ticket.person", "acceptInvite", $attributes);
		return $json;
	}
	public static function cancelInvite($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("ticket.person", "cancelInvite", $attributes);
		return $json;
	}
	public static function makeDefault($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("ticket.person", "makeDefault", $attributes);
		return $json;
	}
	public static function undoDefault($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("ticket.person", "undoDefault", $attributes);
		return $json;
	}
	public static function dismiss($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("ticket.person", "dismiss", $attributes);
		return $json;
	}
	public static function transferList($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("ticket.person", "transferList", $attributes);
		return $json;
	}
}
?>