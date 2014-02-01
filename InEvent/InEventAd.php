<?php

class InEventAd extends InEvent {

    public function create($eventID, $image, $weight) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("image" => $image, "weight" => $weight));
        $json = $this->getJSONObject("ad", "create", $attributes);
        return $json;
    }

    public function createForExhibitor($eventID, $exhibitorID, $image, $weight) {
        $attributes = array("GET" => array("eventID" => $eventID, "exhibitorID" => $exhibitorID), "POST" => array("image" => $image, "weight" => $weight));
        $json = $this->getJSONObject("ad", "createForExhibitor", $attributes);
        return $json;
    }

    public function getAll($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("ad", "getAll", $attributes);
        return $json;
    }

    public function getAllByExhibitor($eventID, $exhibitorID) {
        $attributes = array("GET" => array("eventID" => $eventID, "exhibitorID" => $exhibitorID));
        $json = $this->getJSONObject("ad", "getAllByExhibitor", $attributes);
        return $json;
    }

    public function seenAd($adID) {
        $attributes = array("GET" => array("adID" => $adID));
        $json = $this->getJSONObject("ad", "seenAd", $attributes);
        return $json;
    }

}

?>