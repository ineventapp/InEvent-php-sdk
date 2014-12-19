<?php

class InEventEventTheme extends InEvent {

	public function operateAuthenticatedAtEventWithOperationWithKeyWithValue($eventID, $operation, $key, $value) {
		$attributes = array("GET" => array("eventID" => $eventID, "operation" => $operation, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("event.theme", "operate", $attributes);
		return $json;
	}

}

?>