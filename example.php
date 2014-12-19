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
	
	2. Call a method.

	3. Drink some beer!

	P.S.
	If you are on PHP 5.4 and over, you can directly call a method.

 */

// Sign In
// For person
$inevent = new InEventPerson();
$email = "";
$password = "";
$inevent->signInWithEmailWithPassword($email, $password);

// Fetch some information
// PHP 5.3 and below
$inevent = new InEventEvent();
$inevent->findAuthenticatedWithSelectionWithNameWithCityWithThemeWithDateBeginWithDateEndWithOrder("all", "any", "any", "any", "any", "any", "any");

// PHP 5.4 and over
(new InEventEvent())->findAuthenticatedWithSelectionWithNameWithCityWithThemeWithDateBeginWithDateEndWithOrder("all", "any", "any", "any", "any", "any", "any");

?>