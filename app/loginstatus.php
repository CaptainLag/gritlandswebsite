<?php 
session_start();
echo(print_r($_SESSION)); // This is debug and should be removed

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";
    $sql = "SELECT * FROM user_accounts WHERE id = {$_SESSION["user_id"]}";
    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();
}


/* Use the code below and an include to get this into the page
<!-- Login function -->
<?php if (isset($user)): ?>
    <p>Hi <?= htmlspecialchars($user["username"]) ?> you are logged in</p>
    <p><a href="logout.php">Log out</a></p>
<?php else: ?>
    <p><a href="login.php">Log in</a> or <a href="registration.html">Register an account</a></p>
<?php endif; ?> */


?>
