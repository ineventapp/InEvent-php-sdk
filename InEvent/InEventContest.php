<?php

class InEventContest extends InEvent {

    public function requestAddress($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("contest", "requestAddress", $attributes);
        return $json;
    }

    public function informAddress($eventID, $url) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("url" => $url));
        $json = $this->getJSONObject("contest", "informAddress", $attributes);
        return $json;
    }

}

?>