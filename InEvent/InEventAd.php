<?php

class InEventAd extends InEvent {

	public function createAuthenticatedAtEventForExhibitorWithImageWithWeight($exhibitorID, $image, $weight) {
		$attributes = array("GET" => array("exhibitorID" => $exhibitorID), "POST" => array("image" => $image, "weight" => $weight));
		$json = $this->getJSONObject("ad", "create", $attributes);
		return $json;
	}

	public function createAuthenticatedAtEventWithImageWithWeight($image, $weight) {
		$attributes = array("GET" => array(), "POST" => array("image" => $image, "weight" => $weight));
		$json = $this->getJSONObject("ad", "create", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtAd($adID) {
		$attributes = array("GET" => array("adID" => $adID));
		$json = $this->getJSONObject("ad", "remove", $attributes);
		return $json;
	}

	public function findAtEventForExhibitor($exhibitorID) {
		$attributes = array("GET" => array("exhibitorID" => $exhibitorID));
		$json = $this->getJSONObject("ad", "find", $attributes);
		return $json;
	}

	public function findAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("ad", "find", $attributes);
		return $json;
	}

	public function seenAdAuthenticatedAtAd($adID) {
		$attributes = array("GET" => array("adID" => $adID));
		$json = $this->getJSONObject("ad", "seenAd", $attributes);
		return $json;
	}

	public function seenAdAtAd($adID) {
		$attributes = array("GET" => array("adID" => $adID));
		$json = $this->getJSONObject("ad", "seenAd", $attributes);
		return $json;
	}

}

?>