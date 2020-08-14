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

	# PDO QUERY
	# Fetching data
	// $stmt = $pdo->query('SELECT * FROM posts');

	// while($row = $stmt->fetch()) {
	// 	echo $row->title.'<br />';
	// }

	# PREPARED STATEMENTS (prepare & execute)

	$author = 'Sahan';

	# unsafe method
	# $sql = "SELECT * from posts WHERE author='$author'";

	# Positional params
	// $sql = 'SELECT * FROM posts WHERE author = ?';
	// $stmt = $pdo->prepare($sql);
	// $stmt->execute([$author]); // The ? in the statement will be replaced by the order of the elements in array
	// $posts = $stmt->fetchAll();

	# Named params
	/*$sql = 'SELECT * FROM posts WHERE author = :author';
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['author' => $author]); // The ? in the statement will be replaced by the order of the elements in array
	$posts = $stmt->fetchAll();

	foreach($posts as $post) {
		echo $post->title;
	}*/
	$sql = 'SELECT * FROM posts WHERE author = :author';
	$stmt = $pdo->prepare($sql);
	$stmt->execute(['author' => $author]); // The ? in the statement will be replaced by the order of the elements in array
	$posts = $stmt->fetch(); // This returns single post