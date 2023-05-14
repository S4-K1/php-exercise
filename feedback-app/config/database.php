<?php
	define('DB_HOST', '127.0.0.1');
	define('DB_USER', 'Riley');
	define('DB_NAME', 'php_dev');

	// Create connection

	$conn = new mysqli(DB_HOST, DB_USER, '', DB_NAME);

	if($conn->connect_error) {
		die('Connection Failed ' . $conn->connect_error);
	}
