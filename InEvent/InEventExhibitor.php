<?php

class InEventExhibitor extends InEvent {

    public function getDetails() {
        $attributes = array("GET" => array());
        return $this->getJSONObject("exhibitor", "getDetails", $attributes);
    }

    public function getDetailsForExhibitor($exhibitorID) {
        $attributes = array("GET" => array("exhibitorID" => $exhibitorID));
        return $this->getJSONObject("exhibitor", "getDetailsForExhibitor", $attributes);
    }

    public function edit($key, $value) {
        $attributes = array("GET" => array("key" => $key), "POST" => array("value" => $value));
        return $this->getJSONObject("exhibitor", "edit", $attributes);
    }

}

?>