<?php
$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";
    $sql = sprintf("SELECT * FROM user_accounts
                WHERE email = '%s'", 
                $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) { //User true = there is a user
        if (password_verify($_POST["password"], $user["password_hash"])) {//true if password valid
            
            session_start();
            session_regenerate_id();
            $_SESSION["user_id"] = $user["id"];

             header("Location: index.php");
             exit;
        }
    }
    $is_invalid = true;

    /*
    var_dump($user);
    exit;
    */
}

?>
<!DOCTYPE html>
<head>
    <title>Log in</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <main>
    <h1>Login</h1>

    <?php if ($is_invalid): ?>
        <em>Invalid login</em>
    <?php endif; ?>

    <form method="post">
        <label for="email">email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">

        <label for="password">password</label>
        <input type="password" name="password" id="password">

        <button>Log in</button>
    </form>
    </main>
</body>
</html>