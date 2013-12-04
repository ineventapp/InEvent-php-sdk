<?php

class InEventActivity extends InEvent {

	public function create($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("activity", "create", $attributes);
	}

	public function edit($name, $value, $activityID) {
		$attributes = array("GET" => array("name" => $name, "activityID" => $activityID), "POST" => array("value" => $value));
		return $this->getJSONObject("activity", "create", $attributes);
	}

	public function remove($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		return $this->getJSONObject("activity", "remove", $attributes);
	}

	public function requestEnrollment($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		return $this->getJSONObject("activity", "requestEnrollment", $attributes);
	}

	public function requestEnrollmentForPerson($name, $email, $activityID) {
		$attributes = array("GET" => array("name" => $name, "email" => $email, "activityID" => $activityID));
		return $this->getJSONObject("activity", "requestEnrollment", $attributes);
	}

	public function dismissEnrollment($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		return $this->getJSONObject("activity", "dismissEnrollment", $attributes);
	}

	public function dismissEnrollmentForPerson($personID, $activityID) {
		$attributes = array("GET" => array("personID" => $personID, "activityID" => $activityID));
		return $this->getJSONObject("activity", "dismissEnrollment", $attributes);
	}

	public function confirmEntrance($personID, $activityID) {
		$attributes = array("GET" => array("personID" => $personID, "activityID" => $activityID));
		return $this->getJSONObject("activity", "confirmEntrance", $attributes);
	}

	public function revokeEntrance($personID, $activityID) {
		$attributes = array("GET" => array("personID" => $personID, "activityID" => $activityID));
		return $this->getJSONObject("activity", "revokeEntrance", $attributes);
	}

	public function confirmPayment($personID, $activityID) {
		$attributes = array("GET" => array("personID" => $personID, "activityID" => $activityID));
		return $this->getJSONObject("activity", "confirmPayment", $attributes);
	}

	public function getPeople($personID, $activityID, $selection) {
		$attributes = array("GET" => array("personID" => $personID, "activityID" => $activityID, "selection" => $selection));
		return $this->getJSONObject("activity", "getPeople", $attributes);
	}

	public function getMaterials($activityID, $url) {
		$attributes = array("GET" => array("activityID" => $activityID));
		return $this->getJSONObject("activity", "getMaterials", $attributes);
	}
	
	public function sendMaterial($activityID, $url) {
		$attributes = array("GET" => array("activityID" => $activityID), "POST" => array("url" => $url));
		return $this->getJSONObject("activity", "sendMaterial", $attributes);
	}

	public function removeMaterial($materialID) {
		$attributes = array("GET" => array("materialID" => $materialID));
		return $this->getJSONObject("activity", "removeMaterial", $attributes);
	}

	public function getQuestions($activityID, $selection) {
		$attributes = array("GET" => array("activityID" => $activityID, "selection" => $selection));
		return $this->getJSONObject("activity", "getQuestions", $attributes);
	}

	public function sendQuestion($activityID, $question) {
		$attributes = array("GET" => array("activityID" => $activityID), "POST" => array("question" => $question));
		return $this->getJSONObject("activity", "sendQuestion", $attributes);
	}

	public function removeQuestion($questionID) {
		$attributes = array("GET" => array("questionID" => $questionID));
		return $this->getJSONObject("activity", "removeQuestion", $attributes);
	}

	public function upvoteQuestion($questionID) {
		$attributes = array("GET" => array("questionID" => $questionID));
		return $this->getJSONObject("activity", "upvoteQuestion", $attributes);
	}

	public function getOpinion($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		return $this->getJSONObject("activity", "getOpinion", $attributes);
	}

	public function sendOpinion($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID), "POST" => array("rating" => $rating));
		return $this->getJSONObject("activity", "sendOpinion", $attributes);
	}
	
}

?>