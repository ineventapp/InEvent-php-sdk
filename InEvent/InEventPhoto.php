<?php

class InEventPhoto extends InEvent {

	public function createAuthenticatedAtEventWithUrl($eventID, $url) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("url" => $url));
		$json = $this->getJSONObject("photo", "create", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEvent($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		$json = $this->getJSONObject("photo", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtPhoto($photoID) {
		$attributes = array("GET" => array("photoID" => $photoID));
		$json = $this->getJSONObject("photo", "get", $attributes);
		return $json;
	}

}

?>