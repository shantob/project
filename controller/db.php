<?php

$servername ="Localhost";
$username = "root";
$password = "";
$dbtable = 'final_project';

$conn = new mysqli($servername , $username , $password , $dbtable);

if ($conn->connect_error) {
	die('connection problem');
}

?>