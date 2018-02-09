<?php

session_start();

$_SESSION['user_id'] = 1;

//PHP DATA OBJECT (PDO)
$db = new PDO('mysql:dbname=phptodo;host=localhost', 'root', 'root');

//Handle this in some other way
if(!isset($_SESSION['user_id'])) {
	die("You are not signed in.");
}
