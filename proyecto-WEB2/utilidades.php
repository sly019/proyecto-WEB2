<?php

function connect_db() {
	$mysqli = new mysqli("127.0.0.1", "dbAdmin", "Admin%", "proyecto");

	// /* check connection */
	if ($mysqli->connect_errno) {
	    printf("Connect failed: %s\n", $mysqli->connect_error);
	    exit();
	}

	return $mysqli;
}
?>