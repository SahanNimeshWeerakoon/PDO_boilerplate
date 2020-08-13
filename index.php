<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbName = 'pdoposts';

	// set DSN (data source name)
	$dsn = 'mysql:host='.$host.';dbname='.$dbName;

	// Create a PDO instance
	$pdo = new PDO($dsn, $user, $password);