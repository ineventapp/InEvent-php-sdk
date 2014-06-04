<?php

class InEventQuizOption extends InEvent {

	public function createAuthenticatedAtQuizWithText($quizID, $text) {
		$attributes = array("GET" => array("quizID" => $quizID), "POST" => array("text" => $text));
		$json = $this->getJSONObject("quiz.option", "create", $attributes);
		return $json;
	}

	public function removeAuthenticatedAtQuizOption($quizOptionID) {
		$attributes = array("GET" => array("quizOptionID" => $quizOptionID));
		$json = $this->getJSONObject("quiz.option", "remove", $attributes);
		return $json;
	}

}

?>