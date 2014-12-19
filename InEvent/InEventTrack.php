<?php

class InEventTrack extends InEvent {

	public function createAuthenticatedAtEventWithNameWithColor($eventID, $name, $color) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("name" => $name, "color" => $color));
		$json = $this->getJSONObject("track", "create", $attributes);
		return $json;
	}

	public function editAuthenticatedAtTrackWithKeyWithValue($trackID, $key, $value) {
		$attributes = array("GET" => array("trackID" => $trackID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("track", "edit", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEvent($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		$json = $this->getJSONObject("track", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtTrack($trackID) {
		$attributes = array("GET" => array("trackID" => $trackID));
		$json = $this->getJSONObject("track", "get", $attributes);
		return $json;
	}

}

?>