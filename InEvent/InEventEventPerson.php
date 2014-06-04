<?php

class InEventEventPerson extends InEvent {

	public function bindAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("event.person", "bind", $attributes);
		return $json;
	}

	public function bindAuthenticatedAtEventWithNameWithEmail($name, $email) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name, "email" => $email));
		$json = $this->getJSONObject("event.person", "bind", $attributes);
		return $json;
	}

	public function bindAuthenticatedAtEventWithPath($path) {
		$attributes = array("GET" => array(), "POST" => array("path" => $path));
		$json = $this->getJSONObject("event.person", "bind", $attributes);
		return $json;
	}

	public function operateAuthenticatedAtEventWithKeyForPersonWithValue($key, $personID, $value) {
		$attributes = array("GET" => array("key" => $key, "personID" => $personID), "POST" => array("value" => $value));
		$json = $this->getJSONObject("event.person", "operate", $attributes);
		return $json;
	}

	public function operateAuthenticatedAtEventWithKeyWithValue($key, $value) {
		$attributes = array("GET" => array("key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("event.person", "operate", $attributes);
		return $json;
	}

	public function dismissAuthenticatedAtEventForPerson($personID) {
		$attributes = array("GET" => array("personID" => $personID));
		$json = $this->getJSONObject("event.person", "dismiss", $attributes);
		return $json;
	}

	public function dismissAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("event.person", "dismiss", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEventWithSelectionWithOrder($selection, $order) {
		$attributes = array("GET" => array("selection" => $selection, "order" => $order));
		$json = $this->getJSONObject("event.person", "find", $attributes);
		return $json;
	}

	public function sendMailAuthenticatedAtEventWithSelectionWithOrder($selection, $order) {
		$attributes = array("GET" => array("selection" => $selection, "order" => $order));
		$json = $this->getJSONObject("event.person", "sendMail", $attributes);
		return $json;
	}

	public function getAuthenticatedAtEventForPerson($personID) {
		$attributes = array("GET" => array("personID" => $personID));
		$json = $this->getJSONObject("event.person", "get", $attributes);
		return $json;
	}

	public function getAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("event.person", "get", $attributes);
		return $json;
	}

}

?>