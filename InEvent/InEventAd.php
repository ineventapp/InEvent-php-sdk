<?php

class InEventAd extends InEvent {

	public function getAll($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("ad", "getAll", $attributes);
	}

	public function seenAd($adID) {
		$attributes = array("GET" => array("adID" => $adID));
		return $this->getJSONObject("ad", "seenAd", $attributes);
	}

}
	
?>