<?php

class InEventError extends InEvent {

    public function post($platform, $message) {
        $attributes = array("GET" => array(), "POST" => array("platform" => $platform, "message" => $message));
        return $this->getJSONObject("error", "post", $attributes);
    }

    public function postAnonymous($platform, $message) {
        $attributes = array("GET" => array(), "POST" => array("platform" => $platform, "message" => $message));
        return $this->getJSONObject("error", "postAnonymous", $attributes);
    }

}

?>