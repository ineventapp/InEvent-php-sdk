<?php

class InEventEarth extends InEvent {

	public function findWithSearchQuery($searchQuery) {
		$attributes = array("GET" => array("searchQuery" => $searchQuery));
		$json = $this->getJSONObject("earth", "find", $attributes);
		return $json;
	}

	public function getAtCity($cityID) {
		$attributes = array("GET" => array("cityID" => $cityID));
		$json = $this->getJSONObject("earth", "get", $attributes);
		return $json;
	}

}

?>