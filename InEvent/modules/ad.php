<?php

class InEventAd extends InEvent {

	public function getAds($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("ad", "getAds", $attributes);
	}

	public function seenAd($adID) {
		$attributes = array("GET" => array("adID" => $adID));
		return $this->getJSONObject("ad", "seenAd", $attributes);
	}

}
	
?>