<?php

class InEventError extends InEvent {

	public function createAuthenticatedWithPlatformWithMessageWithSTACK_TRACEWithINITIAL_CONFIGURATIONWithBUILD($platform, $message, $STACK_TRACE, $INITIAL_CONFIGURATION, $BUILD) {
		$attributes = array("GET" => array(), "POST" => array("platform" => $platform, "message" => $message, "STACK_TRACE" => $STACK_TRACE, "INITIAL_CONFIGURATION" => $INITIAL_CONFIGURATION, "BUILD" => $BUILD));
		$json = $this->getJSONObject("error", "create", $attributes);
		return $json;
	}

	public function createWithPlatformWithMessage($platform, $message) {
		$attributes = array("GET" => array(), "POST" => array("platform" => $platform, "message" => $message));
		$json = $this->getJSONObject("error", "create", $attributes);
		return $json;
	}

}

?>