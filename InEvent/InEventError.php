<?php

class InEventError extends InEvent {

    public function post($platform, $message) {
        $attributes = array("GET" => array(), "POST" => array("platform" => $platform, "message" => $message));
        $json = $this->getJSONObject("error", "post", $attributes);
        return $json;
    }

    public function postAnonymous($platform, $message) {
        $attributes = array("GET" => array(), "POST" => array("platform" => $platform, "message" => $message));
        $json = $this->getJSONObject("error", "postAnonymous", $attributes);
        return $json;
    }

}

?>