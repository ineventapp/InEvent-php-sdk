<?php
namespace InEvent\Appointment;

class Host {
	public static function bind($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("appointment.host", "bind", $attributes);
		return $json;
	}
	public static function dismiss($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("appointment.host", "dismiss", $attributes);
		return $json;
	}
	public static function find($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("appointment.host", "find", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("appointment.host", "get", $attributes);
		return $json;
	}
	public static function avaliable($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("appointment.host", "avaliable", $attributes);
		return $json;
	}
}
?>