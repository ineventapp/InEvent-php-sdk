<?php

class InEventFacebook extends InEvent {

	public function signInWithFacebookToken($facebookToken) {
		$attributes = array("GET" => array("facebookToken" => $facebookToken));
		$json = $this->getJSONObject("facebook", "signIn", $attributes);
		$this->token->tokenID = $json["tokenID"];
		return $json;
	}

	public function updateAuthenticatedWithFacebookTokenWithSelection($facebookToken, $selection) {
		$attributes = array("GET" => array("facebookToken" => $facebookToken, "selection" => $selection));
		$json = $this->getJSONObject("facebook", "update", $attributes);
		return $json;
	}

}

?>