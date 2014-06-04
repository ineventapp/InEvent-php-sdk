<?php

class InEventQuestion extends InEvent {

	public function createAuthenticatedAtActivityWithText($activityID, $text) {
		$attributes = array("GET" => array("activityID" => $activityID), "POST" => array("text" => $text));
		$json = $this->getJSONObject("question", "create", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtQuestion($questionID) {
		$attributes = array("GET" => array("questionID" => $questionID));
		$json = $this->getJSONObject("question", "remove", $attributes);
		return $json;
	}

	public function findAuthenticatedAtActivity($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		$json = $this->getJSONObject("question", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtQuestion($questionID) {
		$attributes = array("GET" => array("questionID" => $questionID));
		$json = $this->getJSONObject("question", "get", $attributes);
		return $json;
	}

	public function upvoteAuthenticatedAtQuestion($questionID) {
		$attributes = array("GET" => array("questionID" => $questionID));
		$json = $this->getJSONObject("question", "upvote", $attributes);
		return $json;
	}

}

?>