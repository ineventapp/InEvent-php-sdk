<?php

class InEventAlly extends InEvent {

	public function createAuthenticatedWithNameWithEmail($name, $email) {
		$attributes = array("GET" => array(), "POST" => array("name" => $name, "email" => $email));
		$json = $this->getJSONObject("ally", "create", $attributes);
		return $json;
	}

	public function createAuthenticatedForAlly($allyID) {
		$attributes = array("GET" => array("allyID" => $allyID));
		$json = $this->getJSONObject("ally", "create", $attributes);
		return $json;
	}

	public function editAuthenticatedForAllyWithKeyWithValue($allyID, $key, $value) {
		$attributes = array("GET" => array("allyID" => $allyID, "key" => $key), "POST" => array("value" => $value));
		$json = $this->getJSONObject("ally", "edit", $attributes);
		return $json;
	}

	public function removeAuthenticatedForAlly($allyID) {
		$attributes = array("GET" => array("allyID" => $allyID));
		$json = $this->getJSONObject("ally", "remove", $attributes);
		return $json;
	}

	public function findAuthenticatedWithSelectionWithNameWithEmailWithOrder($selection, $name, $email, $order) {
		$attributes = array("GET" => array("selection" => $selection, "name" => $name, "email" => $email, "order" => $order));
		$json = $this->getJSONObject("ally", "find", $attributes);
		return $json;
	}

	public function writeMailAuthenticatedForAlly($allyID) {
		$attributes = array("GET" => array("allyID" => $allyID));
		$json = $this->getJSONObject("ally", "writeMail", $attributes);
		return $json;
	}

}

?>