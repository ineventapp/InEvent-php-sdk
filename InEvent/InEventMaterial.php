<?php

class InEventMaterial extends InEvent {

	public function createAuthenticatedAtActivityWithNameWithIconWithUrl($activityID, $name, $icon, $url) {
		$attributes = array("GET" => array("activityID" => $activityID), "POST" => array("name" => $name, "icon" => $icon, "url" => $url));
		$json = $this->getJSONObject("material", "create", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtMaterial($materialID) {
		$attributes = array("GET" => array("materialID" => $materialID));
		$json = $this->getJSONObject("material", "remove", $attributes);
		return $json;
	}

	public function findAuthenticatedAtActivity($activityID) {
		$attributes = array("GET" => array("activityID" => $activityID));
		$json = $this->getJSONObject("material", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtMaterial($materialID) {
		$attributes = array("GET" => array("materialID" => $materialID));
		$json = $this->getJSONObject("material", "get", $attributes);
		return $json;
	}

}

?>