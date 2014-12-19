<?php

class InEventActivity extends InEvent {

	public function createAuthenticatedAtEventWithNameWithDateBeginWithDateEnd($eventID, $name, $dateBegin, $dateEnd) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("name" => $name, "dateBegin" => $dateBegin, "dateEnd" => $dateEnd));
		$json = $this->getJSONObject("activity", "create", $attributes);
		return $json;
	}

	public function createAuthenticatedAtEventWithPath($eventID, $path) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("path" => $path));
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

	public function findAuthenticatedAtEventWithSelectionForPerson($eventID, $selection, $personID) {
		$attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection, "personID" => $personID));
		$json = $this->getJSONObject("activity", "find", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEventWithSelection($eventID, $selection) {
		$attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection));
		$json = $this->getJSONObject("activity", "find", $attributes);
		return $json;
	}

	public function findAtEvent($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
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