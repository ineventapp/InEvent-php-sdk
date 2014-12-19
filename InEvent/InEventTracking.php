<?php

class InEventTracking extends InEvent {

	public function createAuthenticatedAtEventWithTargetAtTargetWithDate($eventID, $target, $targetID, $date) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("target" => $target, "targetID" => $targetID, "date" => $date));
		$json = $this->getJSONObject("tracking", "create", $attributes);
		return $json;
	}

	public function createAtEventWithTargetAtTargetWithDate($eventID, $target, $targetID, $date) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("target" => $target, "targetID" => $targetID, "date" => $date));
		$json = $this->getJSONObject("tracking", "create", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEvent($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		$json = $this->getJSONObject("tracking", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtTracking($trackingID) {
		$attributes = array("GET" => array("trackingID" => $trackingID));
		$json = $this->getJSONObject("tracking", "get", $attributes);
		return $json;
	}

}

?>