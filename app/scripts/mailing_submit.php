<?php
//configuration
$host = "mysql-1";
$port = "3306";
$dbname = "gritlands_website";
$username = "root";
$password = "default-root-password";
$connection = null;

//try to connect
//currently failing to connect with error: SQLSTATE[HY000] [2002] php_network_getaddresses: getaddrinfo for mysql-1 failed: Name or service not known
try{
    $connection = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$connection->exec("set names utf8"); //set names to utf8 to stop dodgy characters from frontend
    echo "Connection success";
} catch(PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}

?>