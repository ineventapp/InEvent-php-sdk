<?php

class InEventTicket extends InEvent {

	public function createAuthenticatedAtEventWithName($name) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name));
		$json = $this->getJSONObject("ticket", "create", $attributes);
		return $json;
	}

	public function editAuthenticatedAtTicketWithKeyWithValue($ticketID, $key, $value) {
		$attributes = array("GET" => array("ticketID" => $ticketID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("ticket", "edit", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtTicket($ticketID) {
		$attributes = array("GET" => array("ticketID" => $ticketID));
		$json = $this->getJSONObject("ticket", "remove", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("ticket", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtTicket($ticketID) {
		$attributes = array("GET" => array("ticketID" => $ticketID));
		$json = $this->getJSONObject("ticket", "get", $attributes);
		return $json;
	}

}

?>