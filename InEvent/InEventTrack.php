<?php

class InEventTrack extends InEvent {

	public function createAuthenticatedAtEventWithNameWithColor($name, $color) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name, "color" => $color));
		$json = $this->getJSONObject("track", "create", $attributes);
		return $json;
	}

	public function editAuthenticatedAtTrackWithKeyWithValue($trackID, $key, $value) {
		$attributes = array("GET" => array("trackID" => $trackID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("track", "edit", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
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