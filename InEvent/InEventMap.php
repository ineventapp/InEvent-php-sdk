<?php

class InEventMap extends InEvent {

    public function createItem($mapID, $name) {
        $attributes = array("GET" => array("mapID" => $mapID), "POST" => array("name" => $name));
        return $this->getJSONObject("map", "createItem", $attributes);
    }

    public function edit($mapID, $key, $value) {
        $attributes = array("GET" => array("mapID" => $mapID, "key" => $key), "POST" => array("value" => $value));
        return $this->getJSONObject("map", "edit", $attributes);
    }

    public function editItem($mapItemID, $key, $value) {
        $attributes = array("GET" => array("mapItemID" => $mapItemID, "key" => $key), "POST" => array("value" => $value));
        return $this->getJSONObject("map", "editItem", $attributes);
    }

    public function removeItem($mapItemID) {
        $attributes = array("GET" => array("mapItemID" => $mapItemID));
        return $this->getJSONObject("map", "removeItem", $attributes);
    }

    public function getAll($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("map", "getAll", $attributes);
    }

}

?>