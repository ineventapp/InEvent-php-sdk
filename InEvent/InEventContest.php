<?php
class InEventContest extends InEvent {

	public function requestAddress($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("contest", "requestAddress", $attributes);
	}

	public function informAddress($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("url" => $url));
		return $this->getJSONObject("contest", "informAddress", $attributes);
	}

}

?>