<?php
$server = 'localhost:3306';
$username = 'username';
$password = 'password';
$database = 'timesheet';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}

?>