<?php

class InEventPhoto extends InEvent {

	public function post($eventID, $url) {
		$attributes = array("GET" => array("eventID" => $eventID), "POST" => array("url" => $url));
		return $this->getJSONObject("photo", "post", $attributes);
	}

	public function getPhotos($eventID, $url) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("photo", "getPhotos", $attributes);
	}

	public function getSingle($photoID) {
		$attributes = array("GET" => array("photoID" => $photoID));
		return $this->getJSONObject("photo", "getSingle", $attributes);
	}

}

?>