<?php

class InEventEvent extends InEvent {

	public function createAuthenticatedWithNameWithNickname($name, $nickname) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name, "nickname" => $nickname));
		$json = $this->getJSONObject("event", "create", $attributes);
		return $json;
	}

	public function editAuthenticatedAtEventWithKeyWithValue($key, $value) {
		$attributes = array("GET" => array("key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("event", "edit", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("event", "remove", $attributes);
		return $json;
	}

	public function findAuthenticatedWithSelectionWithNameWithCityWithThemeWithDateBeginWithDateEndWithOrder($selection, $name, $city, $theme, $dateBegin, $dateEnd, $order) {
		$attributes = array("GET" => array("selection" => $selection, "name" => $name, "city" => $city, "theme" => $theme, "dateBegin" => $dateBegin, "dateEnd" => $dateEnd, "order" => $order));
		$json = $this->getJSONObject("event", "find", $attributes);
		return $json;
	}

	public function findWithNameWithCityWithThemeWithDateBeginWithDateEndWithOrder($name, $city, $theme, $dateBegin, $dateEnd, $order) {
		$attributes = array("GET" => array("name" => $name, "city" => $city, "theme" => $theme, "dateBegin" => $dateBegin, "dateEnd" => $dateEnd, "order" => $order));
		$json = $this->getJSONObject("event", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("event", "get", $attributes);
		return $json;
	}

	public function getAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("event", "get", $attributes);
		return $json;
	}

}

?>