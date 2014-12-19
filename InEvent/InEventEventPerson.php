<?php

class InEventEventPerson extends InEvent {

	public function bindAuthenticatedAtEvent($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		$json = $this->getJSONObject("event.person", "bind", $attributes);
		return $json;
	}

	public function bindAuthenticatedAtEventWithNameWithEmail($eventID, $name, $email) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("name" => $name, "email" => $email));
		$json = $this->getJSONObject("event.person", "bind", $attributes);
		return $json;
	}

	public function bindAuthenticatedAtEventWithPath($eventID, $path) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("path" => $path));
		$json = $this->getJSONObject("event.person", "bind", $attributes);
		return $json;
	}

	public function operateAuthenticatedAtEventWithKeyForPersonWithValue($eventID, $key, $personID, $value) {
		$attributes = array("GET" => array("eventID" => $eventID, "key" => $key, "personID" => $personID), "POST" => array("value" => $value));
		$json = $this->getJSONObject("event.person", "operate", $attributes);
		return $json;
	}

	public function operateAuthenticatedAtEventWithKeyWithValue($eventID, $key, $value) {
		$attributes = array("GET" => array("eventID" => $eventID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("event.person", "operate", $attributes);
		return $json;
	}

	public function dismissAuthenticatedAtEventForPerson($eventID, $personID) {
		$attributes = array("GET" => array("eventID" => $eventID, "personID" => $personID));
		$json = $this->getJSONObject("event.person", "dismiss", $attributes);
		return $json;
	}

	public function dismissAuthenticatedAtEvent($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		$json = $this->getJSONObject("event.person", "dismiss", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEventWithSelectionWithOrder($eventID, $selection, $order) {
		$attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection, "order" => $order));
		$json = $this->getJSONObject("event.person", "find", $attributes);
		return $json;
	}

	public function sendMailAuthenticatedAtEventWithSelectionWithOrder($eventID, $selection, $order) {
		$attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection, "order" => $order));
		$json = $this->getJSONObject("event.person", "sendMail", $attributes);
		return $json;
	}

	public function getAuthenticatedAtEventForPerson($eventID, $personID) {
		$attributes = array("GET" => array("eventID" => $eventID, "personID" => $personID));
		$json = $this->getJSONObject("event.person", "get", $attributes);
		return $json;
	}

	public function getAuthenticatedAtEvent($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		$json = $this->getJSONObject("event.person", "get", $attributes);
		return $json;
	}

}

?>