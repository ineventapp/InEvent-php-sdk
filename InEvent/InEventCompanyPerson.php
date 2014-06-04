<?php

class InEventCompanyPerson extends InEvent {

	public function bindAuthenticatedAtCompanyWithNameWithEmail($companyID, $name, $email) {
		$attributes = array("GET" => array("companyID" => $companyID), "POST" => array("name" => $name, "email" => $email));
		$json = $this->getJSONObject("company.person", "bind", $attributes);
		return $json;
	}

	public function operateAuthenticatedAtCompanyWithKeyForPersonWithValue($companyID, $key, $personID, $value) {
		$attributes = array("GET" => array("companyID" => $companyID, "key" => $key, "personID" => $personID), "POST" => array("value" => $value));
		$json = $this->getJSONObject("company.person", "operate", $attributes);
		return $json;
	}

	public function dismissAuthenticatedAtCompanyForPerson($companyID, $personID) {
		$attributes = array("GET" => array("companyID" => $companyID, "personID" => $personID));
		$json = $this->getJSONObject("company.person", "dismiss", $attributes);
		return $json;
	}

	public function findAuthenticatedAtCompanyWithSelectionWithOrder($companyID, $selection, $order) {
		$attributes = array("GET" => array("companyID" => $companyID, "selection" => $selection, "order" => $order));
		$json = $this->getJSONObject("company.person", "find", $attributes);
		return $json;
	}

}

?>