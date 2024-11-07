<?php

/*
* Oficial InEvent's PHP Library
*
* All rights reserved
*/

// Include all our modules
foreach (scandir(dirname(__FILE__) . '/modules') as $filename) {
	$path = dirname(__FILE__) . '/modules' . '/' . $filename;
	if (is_file($path)) {
		require_once($path);
	}
}

/**
* InEvent class
*/
class InEvent {

	/* The oficial api american url */
	const API_BASE_URI_NORTH_AMERICA = 'https://api.inevent.com/';

	/* The oficial api european url */
	const API_BASE_URI_EUROPE = 'https://api.inevent.uk/';

	/* Regions */
	const REGION_NORTH_AMERICA = 0;
	const REGION_EUROPE = 1;

	/* The tokenID */
	public $tokenID = '';

	/* Set timeout default. */
	public $timeout = 30;

	/* Set connect timeout. */
	public $connectTimeout = 30; 

	/* Response format. */
	public $format = 'json';

	/* Set the userAgent. */
	public $userAgent = 'InEvent PHP SDK v1.3';

	/* Set the userAgent. */
	public $region = 0;

	/**
	* Setters
	*/
	public function setTokenID($tokenID) {
		$this->tokenID = $tokenID;
		return $this;
	}
	  
	public function setRegion($region) {
		if (!in_array($region, [0, 1])) $region = 0;
		$this->region = $region;
		return $this;
  	}

	/**
	* Make an HTTP request
	*
	* @return API results
	*/
	public function getJSONObject($namespace, $method, $attributes = array()) {
		// Add remaining properties
		$attributes["GET"]["action"] = $namespace . "." . $method;

		// Encode properties
		$getProperties = (!empty($attributes["GET"])) ? $this->build_http_query($attributes["GET"]) : "";

		// Checks if has file
		$hasFile = false;

		if (!empty($attributes["POST"])) {
			// Added cURL file method, to convert local files
			foreach ($attributes["POST"] as $index => $value) {

				if (is_array($value) && $value["type"] == "file") {
					$attributes["POST"][$index] = new CurlFile($value["value"], "", $value["name"]);
					$hasFile = true;
				}
			}
		}

		$postProperties = (!empty($attributes["POST"])) ? ($hasFile ? $attributes["POST"] : $this->build_http_query($attributes["POST"])) : "";

		$url = ($this->region == self::REGION_EUROPE) ? self::API_BASE_URI_EUROPE : self::API_BASE_URI_NORTH_AMERICA;

		try {
			// Curl settings
			$ci = curl_init();
			curl_setopt($ci, CURLOPT_USERAGENT, $this->userAgent);
			curl_setopt($ci, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
			curl_setopt($ci, CURLOPT_TIMEOUT, $this->timeout);
			curl_setopt($ci, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ci, CURLOPT_HTTPHEADER, array('Expect:'));
			curl_setopt($ci, CURLOPT_HEADERFUNCTION, array($this, 'getHeader'));
			curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, TRUE);
			curl_setopt($ci, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($ci, CURLOPT_POST, TRUE);
			curl_setopt($ci, CURLOPT_URL, $url . "?" . $getProperties);

			$headers = array();

			if ($hasFile) {
				$headers[] = 'Content-type: multipart/form-data;';
			} else {	
				$headers[] = 'Content-Type: application/x-www-form-urlencoded';
			}

			if (!empty($this->tokenID)) {
				$headers[] = 'Authorization: Bearer ' . $this->tokenID;
			}

			if (!empty($headers)) {
				curl_setopt($ci, CURLOPT_HTTPHEADER, $headers);
			}

			if (!empty($postProperties)) {
				curl_setopt($ci, CURLOPT_POSTFIELDS, $postProperties);
			}

			// Display its output
			$body = curl_exec($ci);
			$code = curl_getinfo($ci, CURLINFO_HTTP_CODE);
			$info = curl_getinfo($ci);

			// Capture any errors
			if ($body === FALSE) {
				throw new Exception(curl_error($ci), curl_errno($ci));
			}

			curl_close($ci);

		} catch(Exception $e) {
			trigger_error(sprintf('Curl failed #%d: %s', $e->getCode(), $e->getMessage()), E_USER_ERROR);
		}

		// Display its output
		$response = array(
			"body" => json_decode($body, true),
			"code" => $code,
			"info" => $info
		);

		return $response;
	}

	/**
	* Build a http query with the given params
	*/
	public function build_http_query($params) {
		if (!$params) return '';

		// Urlencode both keys and values
		$keys = $this->urlencode_rfc3986(array_keys($params));
		$values = $this->urlencode_rfc3986(array_values($params));
		$params = array_combine($keys, $values);

		// Parameters are sorted by name, using lexicographical byte value ordering.
		// Ref: Spec: 9.1.1 (1)
		uksort($params, 'strcmp');

		$pairs = array();
		foreach ($params as $parameter => $value) {
			if (is_array($value)) {
				// If two or more parameters share the same name, they are sorted by their value
				// Ref: Spec: 9.1.1 (1)
				natsort($value);

				foreach ($value as $duplicate_value) {
			  		$pairs[] = $parameter . '=' . $duplicate_value;
				}
		  	} else {
			   $pairs[] = $parameter . '=' . $value;
			}
		}

		// For each parameter, the name is separated from the corresponding value by an '=' character (ASCII code 61)
		// Each name-value pair is separated by an '&' character (ASCII code 38)
		return implode('&', $pairs);
	}

	/**
	* Encode based on RFC 3986
	*/
	public function urlencode_rfc3986($input) {
 		if (is_array($input)) {
			return array_map(array($this, 'urlencode_rfc3986'), $input);
  		} else if (is_scalar($input)) {
			return str_replace(
	  			'+',
	  			' ',
	  			str_replace('%7E', '~', rawurlencode($input))
			);
  		} else {
			return '';
  		}
	}

	/**
	* Get the header info to store.
	*/
	function getHeader($ch, $header) {
		$i = strpos($header, ':');
		if (!empty($i)) {
			$key = str_replace('-', '_', strtolower(substr($header, 0, $i)));
			$value = trim(substr($header, $i + 2));
			$this->http_header[$key] = $value;
		}
		
		return strlen($header);
	}
}

?>
