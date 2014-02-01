<?php

class InEventGroup extends InEvent {

    public function create($eventID, $name) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("name" => $name));
        $json = $this->getJSONObject("group", "create", $attributes);
        return $json;
    }

    public function edit($groupID, $key, $value) {
        $attributes = array("GET" => array("groupID" => $groupID, "key" => $key), "POST" => array("value" => $value));
        $json = $this->getJSONObject("group", "edit", $attributes);
        return $json;
    }

    public function remove($groupID) {
        $attributes = array("GET" => array("groupID" => $groupID));
        $json = $this->getJSONObject("group", "remove", $attributes);
        return $json;
    }

    public function enroll($groupID) {
        $attributes = array("GET" => array("groupID" => $groupID));
        $json = $this->getJSONObject("group", "enroll", $attributes);
        return $json;
    }

    public function enrollPerson($groupID, $name, $email) {
        $attributes = array("GET" => array("groupID" => $groupID, "name" => $name, "email" => $email));
        $json = $this->getJSONObject("group", "enrollPerson", $attributes);
        return $json;
    }

    public function dismiss($groupID) {
        $attributes = array("GET" => array("groupID" => $groupID));
        $json = $this->getJSONObject("group", "dismiss", $attributes);
        return $json;
    }

    public function dismissPerson($groupID, $personID) {
        $attributes = array("GET" => array("groupID" => $groupID, "personID" => $personID));
        $json = $this->getJSONObject("group", "dismissPerson", $attributes);
        return $json;
    }

    public function confirmApproval($groupID, $personID) {
        $attributes = array("GET" => array("groupID" => $groupID, "personID" => $personID));
        $json = $this->getJSONObject("group", "confirmApproval", $attributes);
        return $json;
    }

    public function revokeApproval($groupID, $personID) {
        $attributes = array("GET" => array("groupID" => $groupID, "personID" => $personID));
        $json = $this->getJSONObject("group", "revokeApproval", $attributes);
        return $json;
    }

    public function confirmEntrance($groupID, $personID) {
        $attributes = array("GET" => array("groupID" => $groupID, "personID" => $personID));
        $json = $this->getJSONObject("group", "confirmEntrance", $attributes);
        return $json;
    }

    public function revokeEntrance($groupID, $personID) {
        $attributes = array("GET" => array("groupID" => $groupID, "personID" => $personID));
        $json = $this->getJSONObject("group", "revokeEntrance", $attributes);
        return $json;
    }

    public function getPeople($groupID, $selection, $order) {
        $attributes = array("GET" => array("groupID" => $groupID, "selection" => $selection, "order" => $order));
        $json = $this->getJSONObject("group", "getPeople", $attributes);
        return $json;
    }

}

?>