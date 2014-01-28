<?php

class InEventPerson extends InEvent {

    public function signIn($email, $password) {
        $attributes = array("GET" => array("email" => $email, "password" => $password));
        return $this->getJSONObject("person", "signIn", $attributes);
    }

    public function signInWithLinkedIn($linkedInToken) {
        $attributes = array("GET" => array("linkedInToken" => $linkedInToken));
        return $this->getJSONObject("person", "signInWithLinkedIn", $attributes);
    }

    public function signInWithFacebook($facebookToken) {
        $attributes = array("GET" => array("facebookToken" => $facebookToken));
        return $this->getJSONObject("person", "signInWithFacebook", $attributes);
    }

    public function getDetails() {
        $attributes = array("GET" => array());
        return $this->getJSONObject("person", "getDetails", $attributes);
    }

    public function getDetailsForPerson($personID) {
        $attributes = array("GET" => array("personID" => $personID));
        return $this->getJSONObject("person", "getDetailsForPerson", $attributes);
    }

    public function edit($key, $value) {
        $attributes = array("GET" => array("key" => $key), "POST" => array("value" => $value));
        return $this->getJSONObject("person", "edit", $attributes);
    }

    public function enroll($name, $password, $email) {
        $attributes = array("GET" => array(), "POST" => array("name" => $name, "password" => $password, "email" => $email));
        return $this->getJSONObject("person", "enroll", $attributes);
    }

    public function sendRecovery($email) {
        $attributes = array("GET" => array("email" => $email));
        return $this->getJSONObject("person", "sendRecovery", $attributes);
    }

    public function subscribe($email) {
        $attributes = array("GET" => array("email" => $email));
        return $this->getJSONObject("person", "subscribe", $attributes);
    }

    public function unsubscribe($email) {
        $attributes = array("GET" => array("email" => $email));
        return $this->getJSONObject("person", "unsubscribe", $attributes);
    }

    public function changePassword($oldPassword, $newPassword) {
        $attributes = array("GET" => array("oldPassword" => $oldPassword, "newPassword" => $newPassword));
        return $this->getJSONObject("person", "changePassword", $attributes);
    }

}

?>