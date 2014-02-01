<?php

class InEventPayment extends InEvent {

    public function create($eventID, $tickets, $advertisements) {
        $attributes = array("GET" => array("eventID" => $eventID), "POST" => array("tickets" => $tickets, "advertisements" => $advertisements));
        $json = $this->getJSONObject("payment", "create", $attributes);
        return $json;
    }

    public function getAll($eventID) {
        $attributes = array("GET" => array("eventID" => $eventID));
        $json = $this->getJSONObject("payment", "getAll", $attributes);
        return $json;
    }

    public function requestAddress($eventID, $paymentID) {
        $attributes = array("GET" => array("eventID" => $eventID, "paymentID" => $paymentID));
        $json = $this->getJSONObject("payment", "requestAddress", $attributes);
        return $json;
    }

    public function provideConfirmation($eventID, $collection_id) {
        $attributes = array("GET" => array("eventID" => $eventID, "collection_id" => $collection_id));
        $json = $this->getJSONObject("payment", "provideConfirmation", $attributes);
        return $json;
    }

}

?>