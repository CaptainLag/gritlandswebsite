<?php 
include 'loginstatus.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width-device-width, initial scale=1.0" />

        <title>account</title>
        <!--<title>Gritweb</title>-->
        <!--Could have accessible mode to swap to different Stylesheet-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" />
        <link rel="stylesheet" href="style1.css">
        <link rel="icon" type="image/x-icon" href="resources/images/favicon.ico">
    </head>
    <body>
        <!-- main header used across pages -->
        <header>
            <h2>Gritweb version 0.024</h2>
        </header>
            <nav>
                        <!-- Login function -->
                        <?php if (isset($user)): ?>
                        <p>Hi <?= htmlspecialchars($user["username"]) ?> you are logged in</p>
                        <p><a href="logout.php">Log out</a></p>
                    <?php else: ?>
                        <p><a href="login.php">Log in</a> or <a href="registration.html">Register an account</a></p>
                    <?php endif; ?>
            
                <menu>
                    <li><a href="account.php">Account</a></li>
                    <li><a href="booking.html">Booking</a></li>
                    <li><a href="https://rulebook.gritlands.co.uk">Da Rules</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="#">etc...</a></li>
                </menu>
                <div>
                <!-- Search function -->
                    <form>
                        <input type="search" name="search" placeholder="search query" />
                        <input type="submit" value="Go!" />
                    </form>
                </div>
            </nav>

        <!-- Main page content -->
         <main>
            <p> account </p>
        </main>

    </body>
    <footer>

    </footer>
</html>