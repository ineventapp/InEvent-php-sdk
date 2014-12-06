<?php

class InEventComment extends InEvent {

	public function createAuthenticatedAtActivityWithText($activityID, $text) {
		$attributes = array("GET" => array("activityID" => $activityID), "POST" => array("text" => $text));
		$json = $this->getJSONObject("comment", "create", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtComment($commentID) {
		$attributes = array("GET" => array("commentID" => $commentID));
		$json = $this->getJSONObject("comment", "remove", $attributes);
		return $json;
	}

	public function findAuthenticatedAtActivity($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		$json = $this->getJSONObject("comment", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtComment($commentID) {
		$attributes = array("GET" => array("commentID" => $commentID));
		$json = $this->getJSONObject("comment", "get", $attributes);
		return $json;
	}

}

?>