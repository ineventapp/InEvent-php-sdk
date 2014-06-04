<?php

class InEventNews extends InEvent {

	public function createAuthenticatedAtEventForPersonWithMessage($personID, $message) {
		$attributes = array("GET" => array("personID" => $personID), "POST" => array("message" => $message));
		$json = $this->getJSONObject("news", "create", $attributes);
		return $json;
	}

	public function createAuthenticatedAtEventWithMessage($message) {
		$attributes = array("GET" => array(), "POST" => array("message" => $message));
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

	public function findAuthenticatedAtEventWithSelection($selection) {
		$attributes = array("GET" => array("selection" => $selection));
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