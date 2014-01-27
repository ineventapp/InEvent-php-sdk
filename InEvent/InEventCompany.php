<?php
class InEventCompany extends InEvent {

	public function signIn($companyID, $companySecret, $personID) {

		$cryptMessage = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $companySecret, json_encode(array("personID" => $personID)), MCRYPT_MODE_ECB));

		$attributes = array("GET" => array("companyID" => $companyID, "cryptMessage" => $cryptMessage));

		$json = $this->getJSONObject("company", "signIn", $attributes);
		$this->token->tokenID = $json["tokenID"];
		return $json;
	}

	public function getDetails($companyID) {
		$attributes = array("GET" => array("companyID" => $companyID));
		return $this->getJSONObject("company", "getDetails", $attributes);
	}

	public function create($name) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name));
		return $this->getJSONObject("company", "create", $attributes);
	}

	public function edit($companyID, $key, $value) {
		$attributes = array("GET" => array("companyID" => $companyID, "key" => $key), "POST" => array("value" => $value));
		return $this->getJSONObject("company", "edit", $attributes);
	}

	public function remove($companyID) {
		$attributes = array("GET" => array("companyID" => $companyID));
		return $this->getJSONObject("company", "remove", $attributes);
	}

}

?>