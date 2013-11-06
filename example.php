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

	0. Sign in using one of InEventPerson's methods
		$inevent = new InEventPerson();
		$inevent->signIn($email, $password);

	1. Choose one of multiple classes (/modules) and create an object.
		$inevent = new InEventActivity();
	
	2. Call a method
		echo json_encode($inevent->getEvents());

	3. Drink some beer!

	P.S.
	If you are on PHP 5.4 and over, you can directly call a method
		echo json_encode((new InEventEvent())->getEvents());

 */

// PHP 5.3 and below
$inevent = new InEventPerson();
$inevent->signIn($email, $password);

$inevent = new InEventEvent();
echo json_encode($inevent->getEvents());

// PHP 5.4 and over
echo json_encode((new InEventEvent())->getEvents());

?>