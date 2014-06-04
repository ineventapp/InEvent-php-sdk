<?php

class InEventIndicator extends InEvent {

	public function createAuthenticatedAtEventWithKeyWithValue($key, $value) {
		$attributes = array("GET" => array(), "POST" => array("key" => $key, "value" => $value));
		$json = $this->getJSONObject("indicator", "create", $attributes);
		return $json;
	}

	public function editAuthenticatedAtIndicatorWithKeyWithValue($indicatorID, $key, $value) {
		$attributes = array("GET" => array("indicatorID" => $indicatorID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("indicator", "edit", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtIndicator($indicatorID) {
		$attributes = array("GET" => array("indicatorID" => $indicatorID));
		$json = $this->getJSONObject("indicator", "remove", $attributes);
		return $json;
	}

	public function findAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("indicator", "find", $attributes);
		return $json;
	}

	public function getAtIndicator($indicatorID) {
		$attributes = array("GET" => array("indicatorID" => $indicatorID));
		$json = $this->getJSONObject("indicator", "get", $attributes);
		return $json;
	}

}

?>