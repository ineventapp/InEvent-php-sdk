<?php

class InEventPayment extends InEvent {

	public function createAuthenticatedWithNameWithEmail($name, $email) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name, "email" => $email));
		$json = $this->getJSONObject("payment", "create", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("payment", "find", $attributes);
		return $json;
	}

	public function requestAddressAuthenticatedAtEventAtPayment($paymentID) {
		$attributes = array("GET" => array("paymentID" => $paymentID));
		$json = $this->getJSONObject("payment", "requestAddress", $attributes);
		return $json;
	}

	public function provideConfirmationAtEventWithCollection_id($collection_id) {
		$attributes = array("GET" => array("collection_id" => $collection_id));
		$json = $this->getJSONObject("payment", "provideConfirmation", $attributes);
		return $json;
	}

}

?>