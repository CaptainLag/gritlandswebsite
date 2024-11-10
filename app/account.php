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
            <h2>Account</h2>
            <p>This is where all of your account details can be updated</p>
            <p>Please remember to hit Submit otherwise changes will not be saved</p>
            
        <!-- will continue to add more details as they are included in features -->
        <!-- we should log all changes in case we need to reverse changes --> 
        <form action="update_user_account.php" method="post"> 
          <div class="form-group">
            <label for="username">Your Preffered username:</label>
            <input type="text" id="name" name="username" readonly value=<?= htmlspecialchars($user["username"]) ?>>
          </div>
          <div class="form-group">
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required value=<?= htmlspecialchars($user["email"]) ?>>
          </div>
          <div class="form-group">
            <label for="forename">Forename:</label>
            <input type="text" id="forename" name="forename" required value=<?= htmlspecialchars($user["forename"]) ?>>
          </div>
          <div class="form-group">
            <label for="surname">Surname:</label>
            <input type="text" id="surname" name="surname" required value=<?= htmlspecialchars($user["surname"]) ?>>
          </div>
          <button type="submit" name="submit">Submit</button>
        </form>

        </main>

    </body>
    <footer>

    </footer>
</html>