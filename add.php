<?php

require_once 'app/init.php';

if (isset($_POST['name'])) {
	$name = trim($_POST['name']);
	if (!empty($name)) {
    $query = $db->prepare("
			INSERT INTO items (name, user, done, created)
			VALUES (:name, :user, 0, NOW())
    ");

		$result = $query->execute([
			'name' => $name,
			'user' => $_SESSION['user_id']
    ]);

		if (!$result) {
		  var_dump($query->errorInfo());
      die();
    }
	}

}

header('Location: index.php');
