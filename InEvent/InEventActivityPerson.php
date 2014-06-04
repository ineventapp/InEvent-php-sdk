<?php

class InEventActivityPerson extends InEvent {

	public function bindAuthenticatedAtActivityWithNameWithEmail($activityID, $name, $email) {
		$attributes = array("GET" => array("activityID" => $activityID), "POST" => array("name" => $name, "email" => $email));
		$json = $this->getJSONObject("activity.person", "bind", $attributes);
		return $json;
	}

	public function bindAuthenticatedAtActivityWithPath($activityID, $path) {
		$attributes = array("GET" => array("activityID" => $activityID), "POST" => array("path" => $path));
		$json = $this->getJSONObject("activity.person", "bind", $attributes);
		return $json;
	}

	public function bindAuthenticatedAtActivity($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		$json = $this->getJSONObject("activity.person", "bind", $attributes);
		return $json;
	}

	public function operateAuthenticatedAtActivityWithKeyForPersonWithValue($activityID, $key, $personID, $value) {
		$attributes = array("GET" => array("activityID" => $activityID, "key" => $key, "personID" => $personID), "POST" => array("value" => $value));
		$json = $this->getJSONObject("activity.person", "operate", $attributes);
		return $json;
	}

	public function operateAuthenticatedAtActivityWithKeyWithValue($activityID, $key, $value) {
		$attributes = array("GET" => array("activityID" => $activityID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("activity.person", "operate", $attributes);
		return $json;
	}

	public function dismissAuthenticatedAtActivityForPerson($activityID, $personID) {
		$attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
		$json = $this->getJSONObject("activity.person", "dismiss", $attributes);
		return $json;
	}

	public function dismissAuthenticatedAtActivity($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		$json = $this->getJSONObject("activity.person", "dismiss", $attributes);
		return $json;
	}

	public function findAuthenticatedAtActivityWithSelectionWithOrder($activityID, $selection, $order) {
		$attributes = array("GET" => array("activityID" => $activityID, "selection" => $selection, "order" => $order));
		$json = $this->getJSONObject("activity.person", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtActivityForPerson($activityID, $personID) {
		$attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
		$json = $this->getJSONObject("activity.person", "get", $attributes);
		return $json;
	}

	public function getAuthenticatedAtActivity($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		$json = $this->getJSONObject("activity.person", "get", $attributes);
		return $json;
	}

}

?>