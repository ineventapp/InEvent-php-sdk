<?php

class InEventAd extends InEvent {

	public function createAuthenticatedAtSponsorshipWithImageWithWeight($sponsorshipID, $image, $weight) {
		$attributes = array("GET" => array("sponsorshipID" => $sponsorshipID), "POST" => array("image" => $image, "weight" => $weight));
		$json = $this->getJSONObject("ad", "create", $attributes);
		return $json;
	}

	public function editAuthenticatedAtAdWithKeyWithValue($adID, $key, $value) {
		$attributes = array("GET" => array("adID" => $adID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("ad", "edit", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtAd($adID) {
		$attributes = array("GET" => array("adID" => $adID));
		$json = $this->getJSONObject("ad", "remove", $attributes);
		return $json;
	}

	public function findAtSponsorship($sponsorshipID) {
		$attributes = array("GET" => array("sponsorshipID" => $sponsorshipID));
		$json = $this->getJSONObject("ad", "find", $attributes);
		return $json;
	}

	public function findAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("ad", "find", $attributes);
		return $json;
	}

}

?>