<?php

class InEventCompanyParty extends InEvent {

	public function bindAuthenticatedAtCompanyWithNameWithLocation($companyID, $name, $location) {
		$attributes = array("GET" => array("companyID" => $companyID), "POST" => array("name" => $name, "location" => $location));
		$json = $this->getJSONObject("company.party", "bind", $attributes);
		return $json;
	}

	public function dismissAuthenticatedAtCompanyAtParty($companyID, $partyID) {
		$attributes = array("GET" => array("companyID" => $companyID, "partyID" => $partyID));
		$json = $this->getJSONObject("company.party", "dismiss", $attributes);
		return $json;
	}

	public function findAuthenticatedAtCompanyWithSelectionWithOrder($companyID, $selection, $order) {
		$attributes = array("GET" => array("companyID" => $companyID, "selection" => $selection, "order" => $order));
		$json = $this->getJSONObject("company.party", "find", $attributes);
		return $json;
	}

}

?>