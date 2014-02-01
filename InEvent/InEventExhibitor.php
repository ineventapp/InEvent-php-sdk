<?php

class InEventExhibitor extends InEvent {

    public function getDetails() {
        $attributes = array("GET" => array());
        $json = $this->getJSONObject("exhibitor", "getDetails", $attributes);
        return $json;
    }

    public function getDetailsForExhibitor($exhibitorID) {
        $attributes = array("GET" => array("exhibitorID" => $exhibitorID));
        $json = $this->getJSONObject("exhibitor", "getDetailsForExhibitor", $attributes);
        return $json;
    }

    public function edit($key, $value) {
        $attributes = array("GET" => array("key" => $key), "POST" => array("value" => $value));
        $json = $this->getJSONObject("exhibitor", "edit", $attributes);
        return $json;
    }

}

?>