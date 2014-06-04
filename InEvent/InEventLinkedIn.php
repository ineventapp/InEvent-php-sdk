<?php

class InEventLinkedIn extends InEvent {

	public function signInWithLinkedInToken($linkedInToken) {
		$attributes = array("GET" => array("linkedInToken" => $linkedInToken));
		$json = $this->getJSONObject("linkedIn", "signIn", $attributes);
		$this->token->tokenID = $json["tokenID"];
		return $json;
	}

	public function updateAuthenticatedWithLinkedInTokenWithSelection($linkedInToken, $selection) {
		$attributes = array("GET" => array("linkedInToken" => $linkedInToken, "selection" => $selection));
		$json = $this->getJSONObject("linkedIn", "update", $attributes);
		return $json;
	}

	public function generateAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("linkedIn", "generate", $attributes);
		return $json;
	}

}

?>