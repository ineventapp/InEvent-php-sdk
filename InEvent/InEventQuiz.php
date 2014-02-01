<?php

class InEventQuiz extends InEvent {

    public function createQuiz($eventID, $text) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("text" => $text));
        $json = $this->getJSONObject("quiz", "createQuiz", $attributes);
        return $json;
    }

    public function createOption($quizID, $text) {
        $attributes = array("GET" => array("quizID" => $quizID), "POST" => array("text" => $text));
        $json = $this->getJSONObject("quiz", "createOption", $attributes);
        return $json;
    }

    public function removeQuiz($quizID) {
        $attributes = array("GET" => array("quizID" => $quizID));
        $json = $this->getJSONObject("quiz", "removeQuiz", $attributes);
        return $json;
    }

    public function removeOption($quizOptionID) {
        $attributes = array("GET" => array("quizOptionID" => $quizOptionID));
        $json = $this->getJSONObject("quiz", "removeOption", $attributes);
        return $json;
    }

    public function getAll($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("quiz", "getAll", $attributes);
        return $json;
    }

    public function getSingle($quizID) {
        $attributes = array("GET" => array("quizID" => $quizID));
        $json = $this->getJSONObject("quiz", "getSingle", $attributes);
        return $json;
    }

    public function respond($quizID, $quizOptionID) {
        $attributes = array("GET" => array("quizID" => $quizID), "POST" => array("quizOptionID" => $quizOptionID));
        $json = $this->getJSONObject("quiz", "respond", $attributes);
        return $json;
    }

}

?>