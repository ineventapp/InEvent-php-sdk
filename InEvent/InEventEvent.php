<?php

class InEventEvent extends InEvent {

    public function create($name, $nickname) {
        $attributes = array("GET" => array(), "POST" => array("name" => $name, "nickname" => $nickname));
        return $this->getJSONObject("event", "create", $attributes);
    }

    public function edit($eventID, $key, $value) {
        $attributes = array("GET" => array("eventID" => $eventID, "key" => $key), "POST" => array("value" => $value));
        return $this->getJSONObject("event", "edit", $attributes);
    }

    public function getEvents() {
        $attributes = array("GET" => array());
        return $this->getJSONObject("event", "getEvents", $attributes);
    }

    public function getEventsForPerson() {
        $attributes = array("GET" => array());
        return $this->getJSONObject("event", "getEventsForPerson", $attributes);
    }

    public function getSingle($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("event", "getSingle", $attributes);
    }

    public function getSingleForPerson($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("event", "getSingleForPerson", $attributes);
    }

    public function enlistExhibitor($eventID, $name, $email) {
        $attributes = array("GET" => array("eventID" => $eventID, "name" => $name, "email" => $email));
        return $this->getJSONObject("event", "enlistExhibitor", $attributes);
    }

    public function dismissExhibitor($eventID, $exhibitorID) {
        $attributes = array("GET" => array("eventID" => $eventID, "exhibitorID" => $exhibitorID));
        return $this->getJSONObject("event", "dismissExhibitor", $attributes);
    }

    public function enroll($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("event", "enroll", $attributes);
    }

    public function enrollPerson($eventID, $name, $email) {
        $attributes = array("GET" => array("eventID" => $eventID, "name" => $name, "email" => $email));
        return $this->getJSONObject("event", "enrollPerson", $attributes);
    }

    public function enrollPeople($eventID, $path) {
        $attributes = array("GET" => array("eventID" => $eventID, "path" => $path));
        return $this->getJSONObject("event", "enrollPeople", $attributes);
    }

    public function dismissPerson($eventID, $personID) {
        $attributes = array("GET" => array("eventID" => $eventID, "personID" => $personID));
        return $this->getJSONObject("event", "dismissPerson", $attributes);
    }

    public function grantPermission($eventID, $personID) {
        $attributes = array("GET" => array("eventID" => $eventID, "personID" => $personID));
        return $this->getJSONObject("event", "grantPermission", $attributes);
    }

    public function revokePermission($eventID, $personID) {
        $attributes = array("GET" => array("eventID" => $eventID, "personID" => $personID));
        return $this->getJSONObject("event", "revokePermission", $attributes);
    }

    public function getExhibitors($eventID, $selection, $order) {
        $attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection, "order" => $order));
        return $this->getJSONObject("event", "getExhibitors", $attributes);
    }

    public function getPeople($eventID, $selection, $order) {
        $attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection, "order" => $order));
        return $this->getJSONObject("event", "getPeople", $attributes);
    }

    public function sendMail($eventID, $selection, $order) {
        $attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection, "order" => $order));
        return $this->getJSONObject("event", "sendMail", $attributes);
    }

    public function getActivities($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("event", "getActivities", $attributes);
    }

    public function getActivitiesForPerson($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("event", "getActivitiesForPerson", $attributes);
    }

    public function getGroups($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("event", "getGroups", $attributes);
    }

    public function getGroupsForPerson($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("event", "getGroupsForPerson", $attributes);
    }

    public function getOpinion($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        return $this->getJSONObject("event", "getOpinion", $attributes);
    }

    public function sendOpinion($eventID, $rating, $message) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("rating" => $rating, "message" => $message));
        return $this->getJSONObject("event", "sendOpinion", $attributes);
    }

}

?>