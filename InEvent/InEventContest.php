<?php

class InEventContest extends InEvent {

	public function requestAddressAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("contest", "requestAddress", $attributes);
		return $json;
	}

	public function informAddressAuthenticatedAtEventWithUrl($url) {
		$attributes = array("GET" => array(), "POST" => array("url" => $url));
		$json = $this->getJSONObject("contest", "informAddress", $attributes);
		return $json;
	}

}

?>