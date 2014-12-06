<?php

class InEventSponsor extends InEvent {

	public function editAuthenticatedAtSponsorWithKeyWithValue($sponsorID, $key, $value) {
		$attributes = array("GET" => array("sponsorID" => $sponsorID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("sponsor", "edit", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEventWithCompanyNameWithNameWithEmailWithTelephoneWithOrder($companyName, $name, $email, $telephone, $order) {
		$attributes = array("GET" => array("companyName" => $companyName, "name" => $name, "email" => $email, "telephone" => $telephone, "order" => $order));
		$json = $this->getJSONObject("sponsor", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtSponsor($sponsorID) {
		$attributes = array("GET" => array("sponsorID" => $sponsorID));
		$json = $this->getJSONObject("sponsor", "get", $attributes);
		return $json;
	}

}

?>