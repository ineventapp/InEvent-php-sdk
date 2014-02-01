<?php

class InEventMap extends InEvent {

    public function createItem($mapID, $name) {
        $attributes = array("GET" => array("mapID" => $mapID), "POST" => array("name" => $name));
        $json = $this->getJSONObject("map", "createItem", $attributes);
        return $json;
    }

    public function edit($mapID, $key, $value) {
        $attributes = array("GET" => array("mapID" => $mapID, "key" => $key), "POST" => array("value" => $value));
        $json = $this->getJSONObject("map", "edit", $attributes);
        return $json;
    }

    public function editItem($mapItemID, $key, $value) {
        $attributes = array("GET" => array("mapItemID" => $mapItemID, "key" => $key), "POST" => array("value" => $value));
        $json = $this->getJSONObject("map", "editItem", $attributes);
        return $json;
    }

    public function removeItem($mapItemID) {
        $attributes = array("GET" => array("mapItemID" => $mapItemID));
        $json = $this->getJSONObject("map", "removeItem", $attributes);
        return $json;
    }

    public function getAll($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("map", "getAll", $attributes);
        return $json;
    }

}

?>