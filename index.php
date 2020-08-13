<?php
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$dbName = 'pdoposts';

	// set DSN (data source name)
	$dsn = 'mysql:host='.$host.';dbname='.$dbName;

	// Create a PDO instance
	$pdo = new PDO($dsn, $user, $password);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

	// PDO QUERY
	// Fetching data
	// $stmt = $pdo->query('SELECT * FROM posts');

	// while($row = $stmt->fetch()) {
	// 	echo $row->title.'<br />';
	// }