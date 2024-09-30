<?php 
//configuration
$host = "mysql-2";
$dbname = "gritlands_website";
$username = "default-user";
$password = "default-password";

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_errno) {
    die();
}

return $mysqli;