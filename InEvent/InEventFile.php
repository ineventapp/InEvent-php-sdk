<?php

class InEventFile extends InEvent {

	public function createAuthenticatedWithNameWithXWithYWithWidthWithHeight($name, $x, $y, $width, $height) {
		$attributes = array("GET" => array("name" => $name, "x" => $x, "y" => $y, "width" => $width, "height" => $height));
		$json = $this->getJSONObject("file", "create", $attributes);
		return $json;
	}

}

?>