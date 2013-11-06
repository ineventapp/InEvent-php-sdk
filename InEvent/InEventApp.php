<?php
class InEventApp extends InEvent {

	public function signIn($appID, $appSecret, $personID) {

		$cryptedMessage = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $appSecret, json_encode(array("personID" => $personID)), MCRYPT_MODE_ECB));

		$attributes = array("GET" => array("appID" => $appID, "cryptedMessage" => $cryptedMessage));

		$json = $this->getJSONObject("app", "signIn", $attributes);
		$this->token->tokenID = $json["tokenID"];
		return $json;
	}

	public function getDetails($appID) {
		$attributes = array("GET" => array("appID" => $appID));
		return $this->getJSONObject("app", "getDetails", $attributes);
	}

	public function create($name) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name));
		return $this->getJSONObject("app", "create", $attributes);
	}

	public function edit($appID, $name, $value) {
		$attributes = array("GET" => array("appID" => $appID, "name" => $name), "POST" => array("value" => $value));
		return $this->getJSONObject("app", "edit", $attributes);
	}

	public function remove($appID) {
		$attributes = array("GET" => array("appID" => $appID));
		return $this->getJSONObject("app", "remove", $attributes);
	}

}

?>