<?php

class InEventPersonDevice extends InEvent {

	public function bindAuthenticatedAtCompanyWithModelWithDeviceKey($companyID, $model, $deviceKey) {
		$attributes = array("GET" => array("companyID" => $companyID), "POST" => array("model" => $model, "deviceKey" => $deviceKey));
		$json = $this->getJSONObject("person.device", "bind", $attributes);
		return $json;
	}

	public function dismissAuthenticatedAtCompanyWithModelWithDeviceKey($companyID, $model, $deviceKey) {
		$attributes = array("GET" => array("companyID" => $companyID), "POST" => array("model" => $model, "deviceKey" => $deviceKey));
		$json = $this->getJSONObject("person.device", "dismiss", $attributes);
		return $json;
	}

}

?>