<?php

class InEventCompany extends InEvent {

    public function signIn($companyID, $companySecret, $personID) {
        $cryptMessage = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $companySecret, json_encode(array("personID" => $personID)), MCRYPT_MODE_ECB));
    
        $attributes = array("GET" => array("companyID" => $companyID, "cryptMessage" => $cryptMessage));
    
        $json = $this->getJSONObject("company", "signIn", $attributes);
        $this->token->tokenID = $json["tokenID"];
        return $json;
    }

    public function getDetails() {
        $attributes = array("GET" => array());
        return $this->getJSONObject("company", "getDetails", $attributes);
    }

    public function create($name) {
        $attributes = array("GET" => array(), "POST" => array("name" => $name));
        return $this->getJSONObject("company", "create", $attributes);
    }

    public function edit($companyID, $key, $value) {
        $attributes = array("GET" => array("companyID" => $companyID, "key" => $key), "POST" => array("value" => $value));
        return $this->getJSONObject("company", "edit", $attributes);
    }

    public function remove($companyID) {
        $attributes = array("GET" => array("companyID" => $companyID));
        return $this->getJSONObject("company", "remove", $attributes);
    }

    public function renew($companyID) {
        $attributes = array("GET" => array("companyID" => $companyID));
        return $this->getJSONObject("company", "renew", $attributes);
    }

    public function addPerson($companyID, $name, $email) {
        $attributes = array("GET" => array("companyID" => $companyID), "POST" => array("name" => $name, "email" => $email));
        return $this->getJSONObject("company", "addPerson", $attributes);
    }

    public function dismissPerson($companyID, $personID) {
        $attributes = array("GET" => array("companyID" => $companyID, "personID" => $personID));
        return $this->getJSONObject("company", "dismissPerson", $attributes);
    }

    public function getPeople($companyID, $selection, $order) {
        $attributes = array("GET" => array("companyID" => $companyID, "selection" => $selection, "order" => $order));
        return $this->getJSONObject("company", "getPeople", $attributes);
    }

    public function addEvent($companyID, $name, $nickname) {
        $attributes = array("GET" => array("companyID" => $companyID), "POST" => array("name" => $name, "nickname" => $nickname));
        return $this->getJSONObject("company", "addEvent", $attributes);
    }

    public function getEvents($companyID, $selection, $order) {
        $attributes = array("GET" => array("companyID" => $companyID, "selection" => $selection, "order" => $order));
        return $this->getJSONObject("company", "getEvents", $attributes);
    }

}

?>