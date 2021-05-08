<?php
$host = "localhost";
$user = "root";
$pass = "";
$dataBase = "examen2daw";


$mysqli = new mysqli($host,$user,$pass,$dataBase);
	if ($mysqli -> connect_errno) {
		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
	    exit();
	}
