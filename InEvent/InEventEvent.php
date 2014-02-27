<?php

class InEventEvent extends InEvent {

    public function create($name, $nickname) {
        $attributes = array("GET" => array(), "POST" => array("name" => $name, "nickname" => $nickname));
        $json = $this->getJSONObject("event", "create", $attributes);
        return $json;
    }

    public function edit($eventID, $key, $value) {
        $attributes = array("GET" => array("eventID" => $eventID, "key" => $key), "POST" => array("value" => $value));
        $json = $this->getJSONObject("event", "edit", $attributes);
        return $json;
    }

    public function operate($eventID, $action, $key, $value) {
        $attributes = array("GET" => array("eventID" => $eventID, "action" => $action, "key" => $key), "POST" => array("value" => $value));
        $json = $this->getJSONObject("event", "operate", $attributes);
        return $json;
    }

    public function getEvents($name, $city, $theme, $dateBegin, $dateEnd, $order) {
        $attributes = array("GET" => array("name" => $name, "city" => $city, "theme" => $theme, "dateBegin" => $dateBegin, "dateEnd" => $dateEnd, "order" => $order));
        $json = $this->getJSONObject("event", "getEvents", $attributes);
        return $json;
    }

    public function getEventsForPerson($selection, $name, $city, $theme, $dateBegin, $dateEnd, $order) {
        $attributes = array("GET" => array("selection" => $selection, "name" => $name, "city" => $city, "theme" => $theme, "dateBegin" => $dateBegin, "dateEnd" => $dateEnd, "order" => $order));
        $json = $this->getJSONObject("event", "getEventsForPerson", $attributes);
        return $json;
    }

    public function getSingle($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("event", "getSingle", $attributes);
        return $json;
    }

    public function getSingleForPerson($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("event", "getSingleForPerson", $attributes);
        return $json;
    }

    public function enlistExhibitor($eventID, $name, $email) {
        $attributes = array("GET" => array("eventID" => $eventID, "name" => $name, "email" => $email));
        $json = $this->getJSONObject("event", "enlistExhibitor", $attributes);
        return $json;
    }

    public function dismissExhibitor($eventID, $exhibitorID) {
        $attributes = array("GET" => array("eventID" => $eventID, "exhibitorID" => $exhibitorID));
        $json = $this->getJSONObject("event", "dismissExhibitor", $attributes);
        return $json;
    }

    public function enroll($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("event", "enroll", $attributes);
        return $json;
    }

    public function enrollPerson($eventID, $name, $email) {
        $attributes = array("GET" => array("eventID" => $eventID, "name" => $name, "email" => $email));
        $json = $this->getJSONObject("event", "enrollPerson", $attributes);
        return $json;
    }

    public function enrollPeople($eventID, $path) {
        $attributes = array("GET" => array("eventID" => $eventID, "path" => $path));
        $json = $this->getJSONObject("event", "enrollPeople", $attributes);
        return $json;
    }

    public function dismissPerson($eventID, $personID) {
        $attributes = array("GET" => array("eventID" => $eventID, "personID" => $personID));
        $json = $this->getJSONObject("event", "dismissPerson", $attributes);
        return $json;
    }

    public function confirmEntrance($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("event", "confirmEntrance", $attributes);
        return $json;
    }

    public function confirmEntranceForPerson($eventID, $personID) {
        $attributes = array("GET" => array("eventID" => $eventID, "personID" => $personID));
        $json = $this->getJSONObject("event", "confirmEntranceForPerson", $attributes);
        return $json;
    }

    public function revokeEntrance($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("event", "revokeEntrance", $attributes);
        return $json;
    }

    public function revokeEntranceForPerson($eventID, $personID) {
        $attributes = array("GET" => array("eventID" => $eventID, "personID" => $personID));
        $json = $this->getJSONObject("event", "revokeEntranceForPerson", $attributes);
        return $json;
    }

    public function grantPermissionForPerson($eventID, $personID) {
        $attributes = array("GET" => array("eventID" => $eventID, "personID" => $personID));
        $json = $this->getJSONObject("event", "grantPermissionForPerson", $attributes);
        return $json;
    }

    public function revokePermissionForPerson($eventID, $personID) {
        $attributes = array("GET" => array("eventID" => $eventID, "personID" => $personID));
        $json = $this->getJSONObject("event", "revokePermissionForPerson", $attributes);
        return $json;
    }

    public function getExhibitors($eventID, $selection, $order) {
        $attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection, "order" => $order));
        $json = $this->getJSONObject("event", "getExhibitors", $attributes);
        return $json;
    }

    public function getPeople($eventID, $selection, $order) {
        $attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection, "order" => $order));
        $json = $this->getJSONObject("event", "getPeople", $attributes);
        return $json;
    }

    public function sendMail($eventID, $selection, $order) {
        $attributes = array("GET" => array("eventID" => $eventID, "selection" => $selection, "order" => $order));
        $json = $this->getJSONObject("event", "sendMail", $attributes);
        return $json;
    }

    public function getFlowForPerson($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("event", "getFlowForPerson", $attributes);
        return $json;
    }

    public function getActivities($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("event", "getActivities", $attributes);
        return $json;
    }

    public function getActivitiesForPerson($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("event", "getActivitiesForPerson", $attributes);
        return $json;
    }

    public function getGroups($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("event", "getGroups", $attributes);
        return $json;
    }

    public function getGroupsForPerson($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("event", "getGroupsForPerson", $attributes);
        return $json;
    }

    public function getOpinion($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("event", "getOpinion", $attributes);
        return $json;
    }

    public function sendOpinion($eventID, $rating, $message) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("rating" => $rating, "message" => $message));
        $json = $this->getJSONObject("event", "sendOpinion", $attributes);
        return $json;
    }

}

?>