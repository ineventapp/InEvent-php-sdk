<?php

class InEventEvent extends InEvent {

	public function edit($name, $value, $eventID) {
		$attributes = array("GET" => array("name" => $name, "eventID" => $eventID), "POST" => array("value" => $value));
		return $this->getJSONObject("event", "edit", $attributes);
	}

	public function getEvents() {
		$attributes = array("GET" => array());
        return $this->getJSONObject("event", "getEvents", $attributes);
	}

	public function getSingle($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("event", "getSingle", $attributes);
	}

	public function requestEnrollment($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("event", "requestEnrollment", $attributes);
	}

	public function requestEnrollmentForPerson($name, $email, $eventID) {
		$attributes = array("GET" => array("name" => $name, "email" => $email, "eventID" => $eventID));
		return $this->getJSONObject("event", "requestEnrollment", $attributes);
	}

	public function dismissEnrollment($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("event", "dismissEnrollment", $attributes);
	}

	public function dismissEnrollmentForPerson($personID, $eventID) {
		$attributes = array("GET" => array("personID" => $personID, "eventID" => $eventID));
		return $this->getJSONObject("event", "dismissEnrollment", $attributes);
	}

	public function approveEnrollment($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("event", "approveEnrollment", $attributes);
	}

	public function approveEnrollmentForPerson($personID, $eventID) {
		$attributes = array("GET" => array("personID" => $personID, "eventID" => $eventID));
		return $this->getJSONObject("event", "approveEnrollment", $attributes);
	}

	public function grantPermissionForPerson($personID, $eventID) {
		$attributes = array("GET" => array("personID" => $personID, "eventID" => $eventID));
		return $this->getJSONObject("event", "grantPermission", $attributes);
	}

	public function revokePermissionForPerson($personID, $eventID) {
		$attributes = array("GET" => array("personID" => $personID, "eventID" => $eventID));
		return $this->getJSONObject("event", "revokePermission", $attributes);
	}

	public function getPeople($eventID, $selection) {
		$attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection));
		return $this->getJSONObject("event", "getPeople", $attributes);
	}

	public function getActivities($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("event", "getActivities", $attributes);
	}

	public function getOpinion($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("event", "getOpinion", $attributes);
	}

	public function sendOpinion($eventID, $message, $rating) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("message" => $message, "rating" => $rating));
		return $this->getJSONObject("event", "getGroups", $attributes);
	}

	public function getGroups($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("event", "getGroups", $attributes);
	}

}

?>