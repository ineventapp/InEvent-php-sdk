<?php

class InEventPhoto extends InEvent {

    public function post($eventID, $url) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("url" => $url));
        return $this->getJSONObject("photo", "post", $attributes);
    }

    public function getAll($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("photo", "getAll", $attributes);
    }

    public function getSingle($photoID) {
        $attributes = array("GET" => array("photoID" => $photoID));
        return $this->getJSONObject("photo", "getSingle", $attributes);
    }

}

?>