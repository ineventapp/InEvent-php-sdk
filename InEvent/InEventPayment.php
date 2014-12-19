<?php

class InEventPayment extends InEvent {

	public function createAuthenticatedWithNameWithEmail($name, $email) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name, "email" => $email));
		$json = $this->getJSONObject("payment", "create", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEvent($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		$json = $this->getJSONObject("payment", "find", $attributes);
		return $json;
	}

	public function requestAddressAuthenticatedAtEventAtPayment($eventID, $paymentID) {
		$attributes = array("GET" => array("eventID" => $eventID, "paymentID" => $paymentID));
		$json = $this->getJSONObject("payment", "requestAddress", $attributes);
		return $json;
	}

	public function provideConfirmationAtEventWithCollection_id($eventID, $collection_id) {
		$attributes = array("GET" => array("eventID" => $eventID, "collection_id" => $collection_id));
		$json = $this->getJSONObject("payment", "provideConfirmation", $attributes);
		return $json;
	}

}

?>