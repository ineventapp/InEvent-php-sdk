<?php

/*
* Pedro Góes (contato@estudiotrilha.com.br) http://estudiotrilha.com.br
*
* Oficial InEvent's PHP Library
*/

// Include our main class
require_once('InEvent/InEvent.php');

/*
	Simple and direct. That's the way to write a library.

	0. Sign in using InEvent's signIn method.

	1. Choose one of multiple classes (/modules) and create an object.
	1.1. (optional) Define your sandbox mode through setSandbox().
	1.2. (optional) Define your tokenID through setTokenID().
	
	2. Call a method.
	2.1. (optional) See its response through var_dump($this).
	2.2. (optional) See its response code through var_dump($this->httpCode).

	3. Drink some beer!

	P.S.
	If you are on PHP 5.4 and over, you can directly call a method.

 */

// Sign In
// For person
$inevent = new InEventPerson();
$inevent->signInWithEmailWithPassword($email, $password);
var_dump($inevent->httpCode);

// Fetch some information
// PHP 5.3 and below
$inevent = new InEventEvent();
$inevent->findAuthenticatedWithSelectionWithNameWithCityWithThemeWithDateBeginWithDateEndWithOrder("all", "any", "any", "any", "any", "any", "any");
var_dump($inevent->httpCode);

?>