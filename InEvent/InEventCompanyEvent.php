<?php

class InEventCompanyEvent extends InEvent {

	public function bindAuthenticatedAtCompanyWithNameWithNickname($companyID, $name, $nickname) {
		$attributes = array("GET" => array("companyID" => $companyID), "POST" => array("name" => $name, "nickname" => $nickname));
		$json = $this->getJSONObject("company.event", "bind", $attributes);
		return $json;
	}

	public function dismissAuthenticatedAtEventAtCompany($companyID, $eventID) {
		$attributes = array("GET" => array("companyID" => $companyID, "eventID" => $eventID));
		$json = $this->getJSONObject("company.event", "dismiss", $attributes);
		return $json;
	}

	public function findAuthenticatedAtCompanyWithSelectionWithNameWithCityWithThemeWithDateBeginWithDateEndWithOrder($companyID, $selection, $name, $city, $theme, $dateBegin, $dateEnd, $order) {
		$attributes = array("GET" => array("companyID" => $companyID, "selection" => $selection, "name" => $name, "city" => $city, "theme" => $theme, "dateBegin" => $dateBegin, "dateEnd" => $dateEnd, "order" => $order));
		$json = $this->getJSONObject("company.event", "find", $attributes);
		return $json;
	}

	public function findAtCompanyWithNameWithCityWithThemeWithDateBeginWithDateEndWithOrder($companyID, $name, $city, $theme, $dateBegin, $dateEnd, $order) {
		$attributes = array("GET" => array("companyID" => $companyID, "name" => $name, "city" => $city, "theme" => $theme, "dateBegin" => $dateBegin, "dateEnd" => $dateEnd, "order" => $order));
		$json = $this->getJSONObject("company.event", "find", $attributes);
		return $json;
	}

	public function approveAuthenticatedAtEventAtCompany($companyID, $eventID) {
		$attributes = array("GET" => array("companyID" => $companyID, "eventID" => $eventID));
		$json = $this->getJSONObject("company.event", "approve", $attributes);
		return $json;
	}

	public function reviewAuthenticatedAtEventAtCompanyWithMessage($companyID, $eventID, $message) {
		$attributes = array("GET" => array("companyID" => $companyID, "eventID" => $eventID), "POST" => array("message" => $message));
		$json = $this->getJSONObject("company.event", "review", $attributes);
		return $json;
	}

}

?>