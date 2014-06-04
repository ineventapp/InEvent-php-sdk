<?php

class InEventCompany extends InEvent {

	public function createAuthenticatedWithNameWithLocation($name, $location) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name, "location" => $location));
		$json = $this->getJSONObject("company", "create", $attributes);
		return $json;
	}

	public function editAuthenticatedAtCompanyWithKeyWithValue($companyID, $key, $value) {
		$attributes = array("GET" => array("companyID" => $companyID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("company", "edit", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtCompany($companyID) {
		$attributes = array("GET" => array("companyID" => $companyID));
		$json = $this->getJSONObject("company", "remove", $attributes);
		return $json;
	}

	public function findAuthenticated() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("company", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtCompany($companyID) {
		$attributes = array("GET" => array("companyID" => $companyID));
		$json = $this->getJSONObject("company", "get", $attributes);
		return $json;
	}

}

?>