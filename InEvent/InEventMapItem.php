<?php

class InEventMapItem extends InEvent {

	public function createAuthenticatedAtEventWithName($name) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name));
		$json = $this->getJSONObject("map.item", "create", $attributes);
		return $json;
	}

	public function editAuthenticatedAtMapItemWithKeyWithValue($mapItemID, $key, $value) {
		$attributes = array("GET" => array("mapItemID" => $mapItemID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("map.item", "edit", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtMapItem($mapItemID) {
		$attributes = array("GET" => array("mapItemID" => $mapItemID));
		$json = $this->getJSONObject("map.item", "remove", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("map.item", "find", $attributes);
		return $json;
	}

}

?>