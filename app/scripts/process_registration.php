<?php

if (empty($_POST["username"])) {
    die("name is required");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8 ) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/i", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("password must be re-entered correctly in both password and re-enter");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO user_accounts (username, email, forename, surname, password_hash) 
        VALUES (?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {  //returns false if SQL is broken
    die("prepare SQL Error: " . $mysqli->error);
}

$stmt ->bind_param("sssss", 
                    $_POST["username"],
                    $_POST["email"],
                    $_POST["forename"],
                    $_POST["surname"],
                    $password_hash);

 if ($stmt ->execute()) {
    header("Location: ../registration_submitted.html");
    exit;
} else {
    if ($mysqli->errno === 1062){
        die("Duplicate Email address entered");
} else {
    die("execute SQL Error: " . $mysqli->error);
}
}