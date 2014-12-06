<?php

class InEventTracking extends InEvent {

	public function createAuthenticatedAtEventWithTargetAtTargetWithDate($target, $targetID, $date) {
		$attributes = array("GET" => array(), "POST" => array("target" => $target, "targetID" => $targetID, "date" => $date));
		$json = $this->getJSONObject("tracking", "create", $attributes);
		return $json;
	}

	public function createAtEventWithTargetAtTargetWithDate($target, $targetID, $date) {
		$attributes = array("GET" => array(), "POST" => array("target" => $target, "targetID" => $targetID, "date" => $date));
		$json = $this->getJSONObject("tracking", "create", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
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