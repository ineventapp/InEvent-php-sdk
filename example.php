<?php

/*
* Pedro Góes (contato@estudiotrilha.com.br) http://estudiotrilha.com.br
*
* Oficial InEvent's PHP Library
*/

// Include our main class
require_once('InEvent.php');

/*
	Simple and direct. That's the way to write a library.

	1. Create your object using one of the multiple classes (/modules)
		$inevent = new InEventActivity();

	2. Sign in using one of InEventPerson's methods
		$inevent->signIn($email, $password);
	
	3. Call a method
		echo $inevent->getEvents();

	4. Drink some beer!

	P.S.
	If you are on PHP 5.4 and over, you can directly call a method
		echo (new InEventEvent())->getEvents();

 */

// PHP 5.3 and below
$inevent = new InEventEvent();
$inevent->signIn($email, $password);
echo $inevent->getEvents();

// PHP 5.4 and below
echo (new InEventEvent())->getEvents();

?>