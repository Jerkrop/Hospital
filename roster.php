<?php
	if (isset($_SESSION)) {
		session_start();
	}

	$servername = "localhost";
	$username = "postgres";
	$password = "password";
	$dbname = "Hospital";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn -> connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	echo "Connected successfully";
?>