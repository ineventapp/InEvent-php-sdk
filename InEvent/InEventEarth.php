<?php

class InEventEarth extends InEvent {

    public function getSingleCity($cityID) {
        $attributes = array("GET" => array("cityID" => $cityID));
        $json = $this->getJSONObject("earth", "getSingleCity", $attributes);
        return $json;
    }

    public function getCitiesForQuery($searchQuery) {
        $attributes = array("GET" => array("searchQuery" => $searchQuery));
        $json = $this->getJSONObject("earth", "getCitiesForQuery", $attributes);
        return $json;
    }

}

?>