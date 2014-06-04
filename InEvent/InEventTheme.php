<?php

class InEventTheme extends InEvent {

	public function find() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("theme", "find", $attributes);
		return $json;
	}

	public function findWithName($name) {
		$attributes = array("GET" => array("name" => $name));
		$json = $this->getJSONObject("theme", "find", $attributes);
		return $json;
	}

	public function getAtTheme($themeID) {
		$attributes = array("GET" => array("themeID" => $themeID));
		$json = $this->getJSONObject("theme", "get", $attributes);
		return $json;
	}

}

?>