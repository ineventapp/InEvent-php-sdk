<?php

class InEventActivity extends InEvent {

	public function createAuthenticatedAtEventWithName($name) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name));
		$json = $this->getJSONObject("activity", "create", $attributes);
		return $json;
	}

	public function createAuthenticatedAtEventWithPath($path) {
		$attributes = array("GET" => array(), "POST" => array("path" => $path));
		$json = $this->getJSONObject("activity", "create", $attributes);
		return $json;
	}

	public function editAuthenticatedAtActivityWithKeyWithValue($activityID, $key, $value) {
		$attributes = array("GET" => array("activityID" => $activityID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("activity", "edit", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtActivity($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		$json = $this->getJSONObject("activity", "remove", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEventWithSelectionForPerson($selection, $personID) {
		$attributes = array("GET" => array("selection" => $selection, "personID" => $personID));
		$json = $this->getJSONObject("activity", "find", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEventWithSelection($selection) {
		$attributes = array("GET" => array("selection" => $selection));
		$json = $this->getJSONObject("activity", "find", $attributes);
		return $json;
	}

	public function findAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("activity", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtActivityForPerson($activityID, $personID) {
		$attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
		$json = $this->getJSONObject("activity", "get", $attributes);
		return $json;
	}

	public function getAuthenticatedAtActivity($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		$json = $this->getJSONObject("activity", "get", $attributes);
		return $json;
	}

	public function getAtActivity($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		$json = $this->getJSONObject("activity", "get", $attributes);
		return $json;
	}

}

?>