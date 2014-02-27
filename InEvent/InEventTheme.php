<?php

class InEventTheme extends InEvent {

    public function getThemes() {
        $attributes = array("GET" => array());
        $json = $this->getJSONObject("theme", "getThemes", $attributes);
        return $json;
    }

    public function getSingleTheme($themeID) {
        $attributes = array("GET" => array("themeID" => $themeID));
        $json = $this->getJSONObject("theme", "getSingleTheme", $attributes);
        return $json;
    }

    public function getThemesForQuery($searchQuery) {
        $attributes = array("GET" => array("searchQuery" => $searchQuery));
        $json = $this->getJSONObject("theme", "getThemesForQuery", $attributes);
        return $json;
    }

}

?>