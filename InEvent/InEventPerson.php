<?php
class InEventPerson extends InEvent {

	public function signIn($email, $password) {
		$attributes = array("GET" => array("email" => $email, "password" => $password));

		$json = $this->getJSONObject("person", "signIn", $attributes);
		$this->token->tokenID = $json["tokenID"];
		return $json;
	}

	public function signInWithLinkedIn($linkedInToken) {
		$attributes = array("GET" => array("linkedInToken" => $linkedInToken));

		$json = $this->getJSONObject("person", "signInWithLinkedIn", $attributes);
		$this->token->tokenID = $json["tokenID"];
		return $json;
	}

	public function signInWithFacebook($facebookToken) {
		$attributes = array("GET" => array("facebookToken" => $facebookToken));

		$json = $this->getJSONObject("person", "signInWithFacebook", $attributes);
		$this->token->tokenID = $json["tokenID"];
		return $json;
	}

	public function getDetails() {
		$attributes = array("GET" => array());
		return $this->getJSONObject("person", "getDetails", $attributes);
	}

	public function edit($key, $value) {
		$attributes = array("GET" => array("key" => $key), "POST" => array("value" => $value));
		return $this->getJSONObject("person", "edit", $attributes);
	}

	public function enroll($name, $password, $email) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name, "password" => $password, "email" => $email));
		return $this->getJSONObject("person", "enroll", $attributes);
	}

}

?>