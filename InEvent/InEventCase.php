<?php

class InEventCase extends InEvent {

	public function find() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("case", "find", $attributes);
		return $json;
	}

	public function getAtEvent($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		$json = $this->getJSONObject("case", "get", $attributes);
		return $json;
	}

}

?>