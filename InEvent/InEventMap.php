<?php

class InEventMap extends InEvent {

	public function editAuthenticatedAtEventWithKeyWithValue($key, $value) {
		$attributes = array("GET" => array("key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("map", "edit", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("map", "find", $attributes);
		return $json;
	}

}

?>