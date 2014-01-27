<?php

class InEventAd extends InEvent {

    public function create($eventID, $image, $weight) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("image" => $image, "weight" => $weight));
        return $this->getJSONObject("ad", "create", $attributes);
    }

    public function createForExhibitor($eventID, $exhibitorID, $image, $weight) {
        $attributes = array("GET" => array("eventID" => $eventID, "exhibitorID" => $exhibitorID), "POST" => array("image" => $image, "weight" => $weight));
        return $this->getJSONObject("ad", "create", $attributes);
    }

	public function getAll($eventID) {
		$attributes = array("GET" => array("eventID" => $eventID));
		return $this->getJSONObject("ad", "getAll", $attributes);
	}

    public function getAllByExhibitor($eventID, $exhibitorID) {
        $attributes = array("GET" => array("eventID" => $eventID, "exhibitorID" => $exhibitorID));
        return $this->getJSONObject("ad", "getAllByExhibitor", $attributes);
    }

	public function seenAd($adID) {
		$attributes = array("GET" => array("adID" => $adID));
		return $this->getJSONObject("ad", "seenAd", $attributes);
	}

}
	
?>