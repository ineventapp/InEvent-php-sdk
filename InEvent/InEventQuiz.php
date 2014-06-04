<?php

class InEventQuiz extends InEvent {

	public function createAuthenticatedAtEventWithText($text) {
		$attributes = array("GET" => array(), "POST" => array("text" => $text));
		$json = $this->getJSONObject("quiz", "create", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtQuiz($quizID) {
		$attributes = array("GET" => array("quizID" => $quizID));
		$json = $this->getJSONObject("quiz", "remove", $attributes);
		return $json;
	}

	public function findAuthenticatedAtEvent() {
		$attributes = array("GET" => array());
		$json = $this->getJSONObject("quiz", "find", $attributes);
		return $json;
	}

	public function getAuthenticatedAtQuiz($quizID) {
		$attributes = array("GET" => array("quizID" => $quizID));
		$json = $this->getJSONObject("quiz", "get", $attributes);
		return $json;
	}

	public function respondAuthenticatedAtQuizAtQuizOption($quizID, $quizOptionID) {
		$attributes = array("GET" => array("quizID" => $quizID, "quizOptionID" => $quizOptionID));
		$json = $this->getJSONObject("quiz", "respond", $attributes);
		return $json;
	}

}

?>