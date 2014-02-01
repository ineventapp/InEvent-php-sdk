<?php

class InEventActivity extends InEvent {

    public function create($eventID, $name) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("name" => $name));
        $json = $this->getJSONObject("activity", "create", $attributes);
        return $json;
    }

    public function edit($activityID, $key, $value) {
        $attributes = array("GET" => array("activityID" => $activityID, "key" => $key), "POST" => array("value" => $value));
        $json = $this->getJSONObject("activity", "edit", $attributes);
        return $json;
    }

    public function remove($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        $json = $this->getJSONObject("activity", "remove", $attributes);
        return $json;
    }

    public function enroll($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        $json = $this->getJSONObject("activity", "enroll", $attributes);
        return $json;
    }

    public function enrollPerson($activityID, $name, $email) {
        $attributes = array("GET" => array("activityID" => $activityID, "name" => $name, "email" => $email));
        $json = $this->getJSONObject("activity", "enrollPerson", $attributes);
        return $json;
    }

    public function enrollPeople($activityID, $path) {
        $attributes = array("GET" => array("activityID" => $activityID, "path" => $path));
        $json = $this->getJSONObject("activity", "enrollPeople", $attributes);
        return $json;
    }

    public function dismiss($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        $json = $this->getJSONObject("activity", "dismiss", $attributes);
        return $json;
    }

    public function dismissPerson($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        $json = $this->getJSONObject("activity", "dismissPerson", $attributes);
        return $json;
    }

    public function confirmApproval($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        $json = $this->getJSONObject("activity", "confirmApproval", $attributes);
        return $json;
    }

    public function revokeApproval($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        $json = $this->getJSONObject("activity", "revokeApproval", $attributes);
        return $json;
    }

    public function confirmEntrance($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        $json = $this->getJSONObject("activity", "confirmEntrance", $attributes);
        return $json;
    }

    public function revokeEntrance($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        $json = $this->getJSONObject("activity", "revokeEntrance", $attributes);
        return $json;
    }

    public function confirmPayment($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        $json = $this->getJSONObject("activity", "confirmPayment", $attributes);
        return $json;
    }

    public function revokePayment($activityID, $personID) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID));
        $json = $this->getJSONObject("activity", "revokePayment", $attributes);
        return $json;
    }

    public function risePriority($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        $json = $this->getJSONObject("activity", "risePriority", $attributes);
        return $json;
    }

    public function decreasePriority($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        $json = $this->getJSONObject("activity", "decreasePriority", $attributes);
        return $json;
    }

    public function getPeople($activityID, $selection, $order) {
        $attributes = array("GET" => array("activityID" => $activityID, "selection" => $selection, "order" => $order));
        $json = $this->getJSONObject("activity", "getPeople", $attributes);
        return $json;
    }

    public function getMaterials($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        $json = $this->getJSONObject("activity", "getMaterials", $attributes);
        return $json;
    }

    public function sendMaterial($activityID, $name, $icon, $url) {
        $attributes = array("GET" => array("activityID" => $activityID), "POST" => array("name" => $name, "icon" => $icon, "url" => $url));
        $json = $this->getJSONObject("activity", "sendMaterial", $attributes);
        return $json;
    }

    public function removeMaterial($materialID) {
        $attributes = array("GET" => array("materialID" => $materialID));
        $json = $this->getJSONObject("activity", "removeMaterial", $attributes);
        return $json;
    }

    public function getQuestions($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        $json = $this->getJSONObject("activity", "getQuestions", $attributes);
        return $json;
    }

    public function sendQuestion($activityID, $question) {
        $attributes = array("GET" => array("activityID" => $activityID), "POST" => array("question" => $question));
        $json = $this->getJSONObject("activity", "sendQuestion", $attributes);
        return $json;
    }

    public function removeQuestion($questionID) {
        $attributes = array("GET" => array("questionID" => $questionID));
        $json = $this->getJSONObject("activity", "removeQuestion", $attributes);
        return $json;
    }

    public function upvoteQuestion($questionID) {
        $attributes = array("GET" => array("questionID" => $questionID));
        $json = $this->getJSONObject("activity", "upvoteQuestion", $attributes);
        return $json;
    }

    public function getOpinion($activityID) {
        $attributes = array("GET" => array("activityID" => $activityID));
        $json = $this->getJSONObject("activity", "getOpinion", $attributes);
        return $json;
    }

    public function sendOpinion($activityID, $rating) {
        $attributes = array("GET" => array("activityID" => $activityID), "POST" => array("rating" => $rating));
        $json = $this->getJSONObject("activity", "sendOpinion", $attributes);
        return $json;
    }

    public function sendOpinionForPerson($activityID, $personID, $rating) {
        $attributes = array("GET" => array("activityID" => $activityID, "personID" => $personID), "POST" => array("rating" => $rating));
        $json = $this->getJSONObject("activity", "sendOpinionForPerson", $attributes);
        return $json;
    }

}

?>