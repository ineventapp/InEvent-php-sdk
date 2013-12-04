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

	0. Sign in using one of InEvent's methods
	
		$inevent = new InEventPerson();
		$inevent->signIn($email, $password);

		OR

		$inevent = new InEventApp();
		$inevent->signIn($appID, $appSecret, $personID);

	1. Choose one of multiple classes (/modules) and create an object.
		$inevent = new InEventActivity();
	
	2. Call a method
		echo json_encode($inevent->getEvents());

	3. Drink some beer!

	P.S.
	If you are on PHP 5.4 and over, you can directly call a method
		echo json_encode((new InEventEvent())->getEvents());

 */

// Sign In
// For person
$inevent = new InEventPerson();
$inevent->signIn($email, $password);

// For apps
$inevent = new InEventApp();
$inevent->signIn($appID, $appSecret, $personID);

// Fetch some information
// PHP 5.3 and below
$inevent = new InEventEvent();
echo json_encode($inevent->getEvents());

// PHP 5.4 and over
echo json_encode((new InEventEvent())->getEvents());

?>