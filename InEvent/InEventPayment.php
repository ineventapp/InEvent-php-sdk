<?php

class InEventPayment extends InEvent {

	public function create($eventID, $tickets, $advertisements) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("tickets" => $tickets, "advertisements" => $advertisements));
		return $this->getJSONObject("payment", "create", $attributes);
	}

	public function getAll($eventID, $url) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("payment", "getAll", $attributes);
	}

	public function requestAddress($eventID, $paymentID) {
		$attributes = array("GET" => array("eventID" => $eventID, "paymentID" => $paymentID));
		return $this->getJSONObject("payment", "requestAddress", $attributes);
	}

	public function confirmPayment($eventID, $collection_id) {
		$attributes = array("GET" => array("eventID" => $eventID, "collection_id" => $collection_id));
		return $this->getJSONObject("payment", "confirmPayment", $attributes);
	}
}

?>