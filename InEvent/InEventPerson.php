<?php

class InEventPerson extends InEvent {

    public function signIn($email, $password) {
        $attributes = array("GET" => array("email" => $email, "password" => $password));
        $json = $this->getJSONObject("person", "signIn", $attributes);
        $this->token->tokenID = $json["tokenID"];
        return $json;
    }

    public function signInWithLinkedIn($linkedInToken) {
        $attributes = array("GET" => array("linkedInToken" => $linkedInToken));
        $json = $this->getJSONObject("person", "signInWithLinkedIn", $attributes);
        $this->token->tokenID = $json["tokenID"];
        return $json;
    }

    public function signInWithFacebook($facebookToken) {
        $attributes = array("GET" => array("facebookToken" => $facebookToken));
        $json = $this->getJSONObject("person", "signInWithFacebook", $attributes);
        $this->token->tokenID = $json["tokenID"];
        return $json;
    }

    public function getDetails() {
        $attributes = array("GET" => array());
        $json = $this->getJSONObject("person", "getDetails", $attributes);
        return $json;
    }

    public function getDetailsForPerson($personID) {
        $attributes = array("GET" => array("personID" => $personID));
        $json = $this->getJSONObject("person", "getDetailsForPerson", $attributes);
        return $json;
    }

    public function edit($key, $value) {
        $attributes = array("GET" => array("key" => $key), "POST" => array("value" => $value));
        $json = $this->getJSONObject("person", "edit", $attributes);
        return $json;
    }

    public function enroll($name, $password, $email) {
        $attributes = array("GET" => array(), "POST" => array("name" => $name, "password" => $password, "email" => $email));
        $json = $this->getJSONObject("person", "enroll", $attributes);
        return $json;
    }

    public function sendRecovery($email) {
        $attributes = array("GET" => array("email" => $email));
        $json = $this->getJSONObject("person", "sendRecovery", $attributes);
        return $json;
    }

    public function subscribe($email) {
        $attributes = array("GET" => array("email" => $email));
        $json = $this->getJSONObject("person", "subscribe", $attributes);
        return $json;
    }

    public function unsubscribe($email) {
        $attributes = array("GET" => array("email" => $email));
        $json = $this->getJSONObject("person", "unsubscribe", $attributes);
        return $json;
    }

    public function changePassword($oldPassword, $newPassword) {
        $attributes = array("GET" => array("oldPassword" => $oldPassword, "newPassword" => $newPassword));
        $json = $this->getJSONObject("person", "changePassword", $attributes);
        return $json;
    }

}

?>