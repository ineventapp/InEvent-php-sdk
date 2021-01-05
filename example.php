<?php

/*
* Oficial InEvent's PHP Library
*/

// Include our main class
require_once('sdk/InEvent.php');

// Gather our InEvent client
$client = new InEvent();

// Change the enviroment (REGION_NORTH_AMERICA, REGION_EUROPE)
$client->setRegion(InEvent::REGION_NORTH_AMERICA);

// Sign In for person
$response = InEvent\Person::signIn($client, [
	"username" => "youremail@domain.com"
], [
	"password" => "yourpassword"
]);

// Verifies if code is 200 OK
if ($response['code'] == 200) {
	// Sets our client tokenID
	$client->setTokenID($response['body']['data'][0]['tokenID']);

	// Get person details
	$response = InEvent\Person::get($client);

	// Dumps our response
	var_dump($response['body']);

} else {
	echo "Check your credentials and try again later.\n";

}
?>
