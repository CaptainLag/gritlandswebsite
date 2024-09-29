<?php
//configuration
$host = "mysql-1";
$port = "3306";
$dbname = "gritlands_website";
$username = "root";
$password = "default-root-password";
$connection = null;

//try to connect
try{
    $connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$connection->exec("set names utf8"); //set names to utf8 to stop dodgy characters from frontend
    echo "Connection success";
} catch(PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}

?>