<?php

class InEventFlow extends InEvent {

	public function findAuthenticatedAtEvent($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		$json = $this->getJSONObject("flow", "find", $attributes);
		return $json;
	}

}

?>