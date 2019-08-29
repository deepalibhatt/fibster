<?php
	require_once("header.php");
	session_start();
	session_destroy();
	echo "<h2>You have Successfully logged out Click here to login <a href = 'signIn.php'> again</h2></a>";


?>