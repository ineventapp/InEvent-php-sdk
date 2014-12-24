<?php

/*
* Pedro Góes (goes@inevent.us) https://inevent.us
*
* Oficial InEvent's PHP Library
*
* All rights reserved
*/

// Include our token
require_once("InEventToken.php");

// Include all our modules
require_once("InEventActivity.php");
require_once("InEventActivityPerson.php");
require_once("InEventAd.php");
require_once("InEventCase.php");
require_once("InEventComment.php");
require_once("InEventCompany.php");
require_once("InEventCompanyEvent.php");
require_once("InEventCompanyParty.php");
require_once("InEventCompanyPerson.php");
require_once("InEventEarth.php");
require_once("InEventError.php");
require_once("InEventEvent.php");
require_once("InEventEventPerson.php");
require_once("InEventEventSponsor.php");
require_once("InEventEventTheme.php");
require_once("InEventFacebook.php");
require_once("InEventFile.php");
require_once("InEventFlow.php");
require_once("InEventLinkedIn.php");
require_once("InEventMaterial.php");
require_once("InEventNews.php");
require_once("InEventPayment.php");
require_once("InEventPerson.php");
require_once("InEventPersonDevice.php");
require_once("InEventPhoto.php");
require_once("InEventQuiz.php");
require_once("InEventQuizOption.php");
require_once("InEventSponsor.php");
require_once("InEventTheme.php");
require_once("InEventTicket.php");
require_once("InEventTrack.php");
require_once("InEventTracking.php");

/**
* InEvent class
*/
class InEvent {

	/* The oficial api url */
	const API_BASE_URI = 'https://inevent.us/api/';

	/* The tokenID */
	public $token = false;

	/* The given namespace for the requisition. */
	public $namespace = '';

	/* The given method for the requisition. */
	public $method = '';

	/* Set timeout default. */
	public $timeout = 30;

	/* Set connect timeout. */
	public $connectTimeout = 30; 

	/* Contains the last HTTP status code returned. */
	public $httpCode;

	/* Contains the last HTTP headers returned. */
	public $httpInfo;

	/* Response format. */
	public $format = 'json';

	/* Set the userAgent. */
	public $userAgent = 'InEvent PHP SDK v0.1';

	/**
	* Construct InEvent object
	*/
	function __construct() {
		// Instantiate the object
		$this->token = InEventToken::singleton();
	}

	/**
	* Setters
	*/
	public function setTokenID($tokenID) {
    	$this->token->tokenID = $tokenID;
    	return $this;
  	}

  	public function setSandbox($sandbox) {
    	$this->token->sandbox = (int)$sandbox;
    	return $this;
  	}

	/**
	* Make an HTTP request
	*
	* @return API results
	*/
	public function getJSONObject($namespace, $method, $attributes = array()) {

		// Properties
		$this->namespace = $namespace;
		$this->method = $method;

		// Add remaining properties
		$attributes["GET"]["action"] = $this->namespace . "." . $this->method;
		if (!empty($this->token->tokenID)) $attributes["GET"]["tokenID"] = $this->token->tokenID;
		if (!empty($this->token->sandbox)) $attributes["GET"]["sandbox"] = $this->token->sandbox;

		// Encode properties
	    $getProperties = (!empty($attributes["GET"])) ? $this->build_http_query($attributes["GET"]) : "";
	    $postProperties = (!empty($attributes["POST"])) ? $this->build_http_query($attributes["POST"]) : "";

	    // Clean up old variables
		$this->httpInfo = array();

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
	        curl_setopt($ci, CURLOPT_CAINFO, (__DIR__ . '/ssl-bundle.crt'));
			curl_setopt($ci, CURLOPT_HEADER, FALSE);
			curl_setopt($ci, CURLOPT_POST, TRUE);
			curl_setopt($ci, CURLOPT_URL, self::API_BASE_URI . "?" . $getProperties);

			if (!empty($postProperties)) curl_setopt($ci, CURLOPT_POSTFIELDS, $postProperties);

	        // Display its output
	        $response = curl_exec($ci);

	        // Capture any errors
		    if ($response === FALSE) {
		    	throw new Exception(curl_error($ci), curl_errno($ci));
		    }

		    $this->httpCode = curl_getinfo($ci, CURLINFO_HTTP_CODE);
	        $this->httpInfo = array_merge($this->httpInfo, curl_getinfo($ci));
	        curl_close($ci);

	    } catch(Exception $e) {
	        trigger_error(sprintf('Curl failed #%d: %s', $e->getCode(), $e->getMessage()), E_USER_ERROR);
	    }

        // Display its output
        return json_decode($response, true);
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