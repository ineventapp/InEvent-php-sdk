<?php

class InEventPerson extends InEvent {

	public function signInWithEmailWithPassword($email, $password) {
		$attributes = array("GET" => array("email" => $email, "password" => $password));
		$json = $this->getJSONObject("person", "signIn", $attributes);
		$this->token->tokenID = $json["data"][0]["tokenID"];
		return $json;
	}

	public function createWithNameWithEmailWithPassword($name, $email, $password) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name, "email" => $email, "password" => $password));
		$json = $this->getJSONObject("person", "create", $attributes);
		return $json;
	}

	public function editAuthenticatedWithKeyWithValue($key, $value) {
		$attributes = array("GET" => array("key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("person", "edit", $attributes);
		return $json;
	}

	public function findAuthenticated() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("person", "find", $attributes);
		return $json;
	}

	public function findAuthenticatedForPerson($personID) {
		$attributes = array("GET" => array("personID" => $personID));
		$json = $this->getJSONObject("person", "find", $attributes);
		return $json;
	}

	public function sendRecoveryWithEmail($email) {
		$attributes = array("GET" => array("email" => $email));
		$json = $this->getJSONObject("person", "sendRecovery", $attributes);
		return $json;
	}

	public function changePasswordAuthenticatedWithOldPasswordWithNewPassword($oldPassword, $newPassword) {
		$attributes = array("GET" => array("oldPassword" => $oldPassword), "POST" => array("newPassword" => $newPassword));
		$json = $this->getJSONObject("person", "changePassword", $attributes);
		return $json;
	}

	public function subscribeAuthenticatedWithEmail($email) {
		$attributes = array("GET" => array("email" => $email));
		$json = $this->getJSONObject("person", "subscribe", $attributes);
		return $json;
	}

	public function unsubscribeAuthenticatedWithEmail($email) {
		$attributes = array("GET" => array("email" => $email));
		$json = $this->getJSONObject("person", "unsubscribe", $attributes);
		return $json;
	}

}

?>