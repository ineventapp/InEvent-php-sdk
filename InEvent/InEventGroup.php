<?php

class InEventGroup extends InEvent {

	public function create($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("group", "create", $attributes);
	}

	public function edit($key, $value, $groupID) {
		$attributes = array("GET" => array("key" => $key, "groupID" => $groupID), "POST" => array("value" => $value));
		return $this->getJSONObject("group", "create", $attributes);
	}

	public function remove($groupID) {
		$attributes = array("GET" => array("groupID" => $groupID));
		return $this->getJSONObject("group", "remove", $attributes);
	}

	public function requestEnrollment($groupID) {
		$attributes = array("GET" => array("groupID" => $groupID));
		return $this->getJSONObject("group", "requestEnrollment", $attributes);
	}

	public function requestEnrollmentForPerson($name, $email, $groupID) {
		$attributes = array("GET" => array("name" => $name, "email" => $email, "groupID" => $groupID));
		return $this->getJSONObject("group", "requestEnrollment", $attributes);
	}

	public function dismissEnrollment($groupID) {
		$attributes = array("GET" => array("groupID" => $groupID));
		return $this->getJSONObject("group", "dismissEnrollment", $attributes);
	}

	public function dismissEnrollmentForPerson($personID, $groupID) {
		$attributes = array("GET" => array("personID" => $personID, "groupID" => $groupID));
		return $this->getJSONObject("group", "dismissEnrollment", $attributes);
	}

	public function confirmEntrance($personID, $groupID) {
		$attributes = array("GET" => array("personID" => $personID, "groupID" => $groupID));
		return $this->getJSONObject("group", "confirmEntrance", $attributes);
	}

	public function revokeEntrance($personID, $groupID) {
		$attributes = array("GET" => array("personID" => $personID, "groupID" => $groupID));
		return $this->getJSONObject("group", "revokeEntrance", $attributes);
	}

	public function getPeople($personID, $groupID, $selection) {
		$attributes = array("GET" => array("personID" => $personID, "groupID" => $groupID, "selection" => $selection));
		return $this->getJSONObject("group", "getPeople", $attributes);
	}
	
}

?>