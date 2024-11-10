<?php
mysqli_report(MYSQLI_REPORT_OFF);

$mysqli = require __DIR__ . "/database.php";

// TODO: Working on updating account details. currently looking at bind params https://stackoverflow.com/questions/42031067/update-sql-using-bind-param
$sql = "UPDATE user_accounts 
        SET (email, forename, surname) 
        VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {  //returns false if SQL is broken
    die("prepare SQL Error: " . $mysqli->error);
}

$stmt ->bind_param("ssss", 
                    $_POST["username"],
                    $_POST["email"],
                    $_POST["forename"],
                    $_POST["surname"]);

 if ($stmt ->execute()) {
    header("Location: ../account.php");

    exit;
} else {
    if ($mysqli->errno === 1062){
        die("Duplicate entered, nothing updated");
} else {
    die("execute SQL Error: " . $mysqli->error);
}
}

