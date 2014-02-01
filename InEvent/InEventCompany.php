<?php

class InEventCompany extends InEvent {

    public function getDetails($companyID) {
        $attributes = array("GET" => array("companyID" => $companyID));
        $json = $this->getJSONObject("company", "getDetails", $attributes);
        return $json;
    }

    public function create($name) {
        $attributes = array("GET" => array(), "POST" => array("name" => $name));
        $json = $this->getJSONObject("company", "create", $attributes);
        return $json;
    }

    public function edit($companyID, $key, $value) {
        $attributes = array("GET" => array("companyID" => $companyID, "key" => $key), "POST" => array("value" => $value));
        $json = $this->getJSONObject("company", "edit", $attributes);
        return $json;
    }

    public function remove($companyID) {
        $attributes = array("GET" => array("companyID" => $companyID));
        $json = $this->getJSONObject("company", "remove", $attributes);
        return $json;
    }

    public function renew($companyID) {
        $attributes = array("GET" => array("companyID" => $companyID));
        $json = $this->getJSONObject("company", "renew", $attributes);
        return $json;
    }

    public function addPerson($companyID, $name, $email) {
        $attributes = array("GET" => array("companyID" => $companyID), "POST" => array("name" => $name, "email" => $email));
        $json = $this->getJSONObject("company", "addPerson", $attributes);
        return $json;
    }

    public function dismissPerson($companyID, $personID) {
        $attributes = array("GET" => array("companyID" => $companyID, "personID" => $personID));
        $json = $this->getJSONObject("company", "dismissPerson", $attributes);
        return $json;
    }

    public function getPeople($companyID, $selection, $order) {
        $attributes = array("GET" => array("companyID" => $companyID, "selection" => $selection, "order" => $order));
        $json = $this->getJSONObject("company", "getPeople", $attributes);
        return $json;
    }

    public function addEvent($companyID, $name, $nickname) {
        $attributes = array("GET" => array("companyID" => $companyID), "POST" => array("name" => $name, "nickname" => $nickname));
        $json = $this->getJSONObject("company", "addEvent", $attributes);
        return $json;
    }

    public function getEvents($companyID, $selection, $order) {
        $attributes = array("GET" => array("companyID" => $companyID, "selection" => $selection, "order" => $order));
        $json = $this->getJSONObject("company", "getEvents", $attributes);
        return $json;
    }

}

?>