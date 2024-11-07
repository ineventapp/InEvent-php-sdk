<?php
namespace InEvent;

class Person {
	public static function create($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "create", $attributes);
		return $json;
	}
	public static function edit($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "edit", $attributes);
		return $json;
	}
	public static function get($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "get", $attributes);
		return $json;
	}
	public static function signIn($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "signIn", $attributes);
		if (isset($json["body"]["data"])  && count($json["body"]["data"]) > 0) {
			$client->setTokenID($json["body"]["data"][0]["tokenID"]);
		}
		return $json;
	}
	public static function externalSignIn($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "externalSignIn", $attributes);
		return $json;
	}
	public static function enableTwoFactor($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "enableTwoFactor", $attributes);
		return $json;
	}
	public static function disableTwoFactor($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "disableTwoFactor", $attributes);
		return $json;
	}
	public static function requestTrial($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "requestTrial", $attributes);
		return $json;
	}
	public static function sendRecovery($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "sendRecovery", $attributes);
		return $json;
	}
	public static function changePassword($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "changePassword", $attributes);
		return $json;
	}
	public static function changeLevel($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "changeLevel", $attributes);
		return $json;
	}
	public static function exportData($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "exportData", $attributes);
		return $json;
	}
	public static function terminateAccount($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "terminateAccount", $attributes);
		return $json;
	}
	public static function sendFeedback($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "sendFeedback", $attributes);
		return $json;
	}
	public static function sendBug($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "sendBug", $attributes);
		return $json;
	}
	public static function getBug($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "getBug", $attributes);
		return $json;
	}
	public static function sendTroubleshoot($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "sendTroubleshoot", $attributes);
		return $json;
	}
	public static function setPreference($client, array $get = array(), array $post = array()) {
		$attributes = array("GET" => $get, "POST" => $post);
		$json = $client->getJSONObject("person", "setPreference", $attributes);
		return $json;
	}
}
?>