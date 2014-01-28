<?php

class InEventActivity extends InEvent {

    public function create($eventID, $name) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("name" => $name));
        return $this->getJSONObject("activity", "create", $attributes);
    }

    public function edit($activityID, $key, $value) {
        $attributes = array("GET" => array("activityID" => $activityID, "key" => $key), "POST" => array("value" => $value));
        return $this->getJSONObject("activity", "edit", $attributes);
    }

    public function remove($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        return $this->getJSONObject("activity", "remove", $attributes);
    }

    public function enroll($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        return $this->getJSONObject("activity", "enroll", $attributes);
    }

    public function enrollPerson($activityID, $name, $email) {
        $attributes = array("GET" => array("activityID" => $activityID, "name" => $name, "email" => $email));
        return $this->getJSONObject("activity", "enrollPerson", $attributes);
    }

    public function enrollPeople($activityID, $path) {
        $attributes = array("GET" => array("activityID" => $activityID, "path" => $path));
        return $this->getJSONObject("activity", "enrollPeople", $attributes);
    }

    public function dismiss($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        return $this->getJSONObject("activity", "dismiss", $attributes);
    }

    public function dismissPerson($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        return $this->getJSONObject("activity", "dismissPerson", $attributes);
    }

    public function confirmApproval($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        return $this->getJSONObject("activity", "confirmApproval", $attributes);
    }

    public function revokeApproval($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        return $this->getJSONObject("activity", "revokeApproval", $attributes);
    }

    public function confirmEntrance($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        return $this->getJSONObject("activity", "confirmEntrance", $attributes);
    }

    public function revokeEntrance($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        return $this->getJSONObject("activity", "revokeEntrance", $attributes);
    }

    public function confirmPayment($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        return $this->getJSONObject("activity", "confirmPayment", $attributes);
    }

    public function revokePayment($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        return $this->getJSONObject("activity", "revokePayment", $attributes);
    }

    public function risePriority($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        return $this->getJSONObject("activity", "risePriority", $attributes);
    }

    public function decreasePriority($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        return $this->getJSONObject("activity", "decreasePriority", $attributes);
    }

    public function getPeople($activityID, $selection, $order) {
        $attributes = array("GET" => array("activityID" => $activityID, "selection" => $selection, "order" => $order));
        return $this->getJSONObject("activity", "getPeople", $attributes);
    }

    public function getMaterials($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        return $this->getJSONObject("activity", "getMaterials", $attributes);
    }

    public function sendMaterial($activityID, $name, $icon, $url) {
        $attributes = array("GET" => array("activityID" => $activityID), "POST" => array("name" => $name, "icon" => $icon, "url" => $url));
        return $this->getJSONObject("activity", "sendMaterial", $attributes);
    }

    public function removeMaterial($materialID) {
        $attributes = array("GET" => array("materialID" => $materialID));
        return $this->getJSONObject("activity", "removeMaterial", $attributes);
    }

    public function getQuestions($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        return $this->getJSONObject("activity", "getQuestions", $attributes);
    }

    public function sendQuestion($activityID, $question) {
        $attributes = array("GET" => array("activityID" => $activityID), "POST" => array("question" => $question));
        return $this->getJSONObject("activity", "sendQuestion", $attributes);
    }

    public function removeQuestion($questionID) {
        $attributes = array("GET" => array("questionID" => $questionID));
        return $this->getJSONObject("activity", "removeQuestion", $attributes);
    }

    public function upvoteQuestion($questionID) {
        $attributes = array("GET" => array("questionID" => $questionID));
        return $this->getJSONObject("activity", "upvoteQuestion", $attributes);
    }

    public function getOpinion($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        return $this->getJSONObject("activity", "getOpinion", $attributes);
    }

    public function sendOpinion($activityID, $rating) {
        $attributes = array("GET" => array("activityID" => $activityID), "POST" => array("rating" => $rating));
        return $this->getJSONObject("activity", "sendOpinion", $attributes);
    }

    public function sendOpinionForPerson($activityID, $personID, $rating) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID), "POST" => array("rating" => $rating));
        return $this->getJSONObject("activity", "sendOpinionForPerson", $attributes);
    }

}

?>