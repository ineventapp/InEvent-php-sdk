<?php

class InEventFlow extends InEvent {

	public function findAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("flow", "find", $attributes);
		return $json;
	}

}

?>