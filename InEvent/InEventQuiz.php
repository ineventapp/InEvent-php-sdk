<?php

class InEventQuiz extends InEvent {

    public function createQuiz($eventID, $text) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("text" => $text));
        return $this->getJSONObject("quiz", "createQuiz", $attributes);
    }

    public function createOption($quizID, $text) {
        $attributes = array("GET" => array("quizID" => $quizID), "POST" => array("text" => $text));
        return $this->getJSONObject("quiz", "createOption", $attributes);
    }

    public function removeQuiz($quizID) {
        $attributes = array("GET" => array("quizID" => $quizID));
        return $this->getJSONObject("quiz", "removeQuiz", $attributes);
    }

    public function removeOption($quizOptionID) {
        $attributes = array("GET" => array("quizOptionID" => $quizOptionID));
        return $this->getJSONObject("quiz", "removeOption", $attributes);
    }

    public function getAll($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("quiz", "getAll", $attributes);
    }

    public function getSingle($quizID) {
        $attributes = array("GET" => array("quizID" => $quizID));
        return $this->getJSONObject("quiz", "getSingle", $attributes);
    }

    public function respond($quizID, $quizOptionID) {
        $attributes = array("GET" => array("quizID" => $quizID), "POST" => array("quizOptionID" => $quizOptionID));
        return $this->getJSONObject("quiz", "respond", $attributes);
    }

}

?>