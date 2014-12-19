<?php

class InEventEventSponsor extends InEvent {

	public function bindAuthenticatedAtEventWithCompanyNameWithNameWithEmailWithTelephone($eventID, $companyName, $name, $email, $telephone) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("companyName" => $companyName, "name" => $name, "email" => $email, "telephone" => $telephone));
		$json = $this->getJSONObject("event.sponsor", "bind", $attributes);
		return $json;
	}

	public function bindAuthenticatedAtEventAtSponsor($eventID, $sponsorID) {
		$attributes = array("GET" => array("eventID" => $eventID, "sponsorID" => $sponsorID));
		$json = $this->getJSONObject("event.sponsor", "bind", $attributes);
		return $json;
	}

	public function dismissAuthenticatedAtEventAtSponsor($eventID, $sponsorID) {
		$attributes = array("GET" => array("eventID" => $eventID, "sponsorID" => $sponsorID));
		$json = $this->getJSONObject("event.sponsor", "dismiss", $attributes);
		return $json;
	}

	public function operateAuthenticatedAtEventAtSponsorWithKeyWithValue($eventID, $sponsorID, $key, $value) {
		$attributes = array("GET" => array("eventID" => $eventID, "sponsorID" => $sponsorID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("event.sponsor", "operate", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEventWithCompanyNameWithNameWithEmailWithTelephoneWithPositionWithOrder($eventID, $companyName, $name, $email, $telephone, $position, $order) {
		$attributes = array("GET" => array("eventID" => $eventID, "companyName" => $companyName, "name" => $name, "email" => $email, "telephone" => $telephone, "position" => $position, "order" => $order));
		$json = $this->getJSONObject("event.sponsor", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtEventAtSponsor($eventID, $sponsorID) {
		$attributes = array("GET" => array("eventID" => $eventID, "sponsorID" => $sponsorID));
		$json = $this->getJSONObject("event.sponsor", "get", $attributes);
		return $json;
	}

	public function getAuthenticatedAtSponsorship($sponsorshipID) {
		$attributes = array("GET" => array("sponsorshipID" => $sponsorshipID));
		$json = $this->getJSONObject("event.sponsor", "get", $attributes);
		return $json;
	}

}

?>