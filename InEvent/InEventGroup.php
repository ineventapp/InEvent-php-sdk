<?php

class InEventGroup extends InEvent {

    public function create($eventID, $name) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("name" => $name));
        return $this->getJSONObject("group", "create", $attributes);
    }

    public function edit($groupID, $key, $value) {
        $attributes = array("GET" => array("groupID" => $groupID, "key" => $key), "POST" => array("value" => $value));
        return $this->getJSONObject("group", "edit", $attributes);
    }

    public function remove($groupID) {
        $attributes = array("GET" => array("groupID" => $groupID));
        return $this->getJSONObject("group", "remove", $attributes);
    }

    public function enroll($groupID) {
        $attributes = array("GET" => array("groupID" => $groupID));
        return $this->getJSONObject("group", "enroll", $attributes);
    }

    public function enrollPerson($groupID, $name, $email) {
        $attributes = array("GET" => array("groupID" => $groupID, "name" => $name, "email" => $email));
        return $this->getJSONObject("group", "enrollPerson", $attributes);
    }

    public function dismiss($groupID) {
        $attributes = array("GET" => array("groupID" => $groupID));
        return $this->getJSONObject("group", "dismiss", $attributes);
    }

    public function dismissPerson($groupID, $personID) {
        $attributes = array("GET" => array("groupID" => $groupID, "personID" => $personID));
        return $this->getJSONObject("group", "dismissPerson", $attributes);
    }

    public function confirmApproval($groupID, $personID) {
        $attributes = array("GET" => array("groupID" => $groupID, "personID" => $personID));
        return $this->getJSONObject("group", "confirmApproval", $attributes);
    }

    public function revokeApproval($groupID, $personID) {
        $attributes = array("GET" => array("groupID" => $groupID, "personID" => $personID));
        return $this->getJSONObject("group", "revokeApproval", $attributes);
    }

    public function confirmEntrance($groupID, $personID) {
        $attributes = array("GET" => array("groupID" => $groupID, "personID" => $personID));
        return $this->getJSONObject("group", "confirmEntrance", $attributes);
    }

    public function revokeEntrance($groupID, $personID) {
        $attributes = array("GET" => array("groupID" => $groupID, "personID" => $personID));
        return $this->getJSONObject("group", "revokeEntrance", $attributes);
    }

    public function getPeople($groupID, $selection, $order) {
        $attributes = array("GET" => array("groupID" => $groupID, "selection" => $selection, "order" => $order));
        return $this->getJSONObject("group", "getPeople", $attributes);
    }

}

?>