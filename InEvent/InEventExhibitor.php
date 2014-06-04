<?php

class InEventExhibitor extends InEvent {

	public function editAuthenticatedAtEventWithKeyWithValue($key, $value) {
		$attributes = array("GET" => array("key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("exhibitor", "edit", $attributes);
		return $json;
	}

	public function getAuthenticatedForExhibitor($exhibitorID) {
		$attributes = array("GET" => array("exhibitorID" => $exhibitorID));
		$json = $this->getJSONObject("exhibitor", "get", $attributes);
		return $json;
	}

	public function getAuthenticated() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("exhibitor", "get", $attributes);
		return $json;
	}

}

?>