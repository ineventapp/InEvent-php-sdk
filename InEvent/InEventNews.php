<?php

class InEventNews extends InEvent {

	public function createAuthenticatedAtEventForPersonWithMessage($eventID, $personID, $message) {
		$attributes = array("GET" => array("eventID" => $eventID, "personID" => $personID), "POST" => array("message" => $message));
		$json = $this->getJSONObject("news", "create", $attributes);
		return $json;
	}

	public function createAuthenticatedAtEventWithMessage($eventID, $message) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("message" => $message));
		$json = $this->getJSONObject("news", "create", $attributes);
		return $json;
	}

	public function createAuthenticatedAtActivityWithMessage($activityID, $message) {
		$attributes = array("GET" => array("activityID" => $activityID), "POST" => array("message" => $message));
		$json = $this->getJSONObject("news", "create", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtNews($newsID) {
		$attributes = array("GET" => array("newsID" => $newsID));
		$json = $this->getJSONObject("news", "remove", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEventWithSelection($eventID, $selection) {
		$attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection));
		$json = $this->getJSONObject("news", "find", $attributes);
		return $json;
	}

	public function findAuthenticatedAtActivity($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		$json = $this->getJSONObject("news", "find", $attributes);
		return $json;
	}

	public function getAtNews($newsID) {
		$attributes = array("GET" => array("newsID" => $newsID));
		$json = $this->getJSONObject("news", "get", $attributes);
		return $json;
	}

}

?>