<?php

class InEventMaterial extends InEvent {

	public function post($activityID, $url) {
		$attributes = array("GET" => array("activityID" => $activityID), "POST" => array("url" => $url));
		return $this->getJSONObject("material", "post", $attributes);
	}

	public function getAll($activityID, $url) {
		$attributes = array("GET" => array("activityID" => $activityID));
		return $this->getJSONObject("material", "getAll", $attributes);
	}

	public function getSingle($materialID) {
		$attributes = array("GET" => array("materialID" => $materialID));
		return $this->getJSONObject("material", "getSingle", $attributes);
	}

	public function remove($materialID) {
		$attributes = array("GET" => array("materialID" => $materialID));
		return $this->getJSONObject("material", "remove", $attributes);
	}
}

?>