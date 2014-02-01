<?php

class InEventPhoto extends InEvent {

    public function post($eventID, $url) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("url" => $url));
        $json = $this->getJSONObject("photo", "post", $attributes);
        return $json;
    }

    public function getAll($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("photo", "getAll", $attributes);
        return $json;
    }

    public function getSingle($photoID) {
        $attributes = array("GET" => array("photoID" => $photoID));
        $json = $this->getJSONObject("photo", "getSingle", $attributes);
        return $json;
    }

}

?>