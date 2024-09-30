<?php 

session_start();

echo(print_r($_SESSION));

if (isset($_SESSION["user_id"])) {
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user_accounts
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width-device-width, initial scale=1.0" />

        <title>WIP In Progress</title>

        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Sonsie+One" rel="stylesheet" />
        <link rel="stylesheet" href="style1.css">
        <link rel="icon" type="image/x-icon" href="resources/images/favicon.ico">
    </head>

    <body>
        <!-- main header used across pages -->
        <header>
            <a href="index.html">
                <h2>Gritweb version 0.024</h2>
                <object data="resources/images/gritlands-logo.svg" type="image/svg+xml" style="width: 200px; height: 150px; opacity: 1; transition: opacity 0.3s ease;">
                  <img src="resources/images/fail-icon.svg" alt="Fallback image">
                </object>
              </a>
        </header>
            <nav>
                <menu>
                    <li><a href="account.html">Account</a></li>
                    <li><a href="booking.html">Booking</a></li>
                    <li><a href="https://rulebook.gritlands.co.uk">Da Rules</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="#">etc...</a></li>
                </menu>
                <div>
                <!-- Login function -->
                <?php if (isset($user)): ?>
                    <p>Hi <?= htmlspecialchars($user["username"]) ?> you are logged in</p>
                    <p><a href="logout.php">Log out</a></p>
                <?php else: ?>
                    <p><a href="login.php">Log in</a> or <a href="registration.html">Register an account</a></p>
                <?php endif; ?>
                <!-- Search function -->
                 <form>
                    <input type="search" name="search" placeholder="search query" />
                    <input type="submit" value="Go!" />
                 </form>
                </div>
            </nav>
            <!-- Main page content -->
        <main>
            <aside>
                <h2>Related gubbins</h2>
                <ul> 
                    <li><a href="#">O̵͇̅͌h̵̢̻̹͚̪͈̖͉̰͆͊͂̌͂́͒̇͗̚ͅ ̶̛̠̍̓̂̈̒̉̾̌̈́̀͋͝Ỉ̸͍̊̏̑̐̍̎̿͝͝ ̵̬̰̳͍͙̹̰̪̭̓̔̈́̔̍͂͜͠ḓ̴̍́̎̽̈́̌͂͘͝ơ̶̠͍̞̬̬̱̰̝͈͕̖̦̘̻̈̈́͂̌̀̒̏́͂̀͗͆̏̂͊̕͜ ̸̙̖̥̘͎̝̬̑͜l̴͕̀̿̍́̊̕͘͜į̷̯͔̥̩̳̥͚̮̇̇̇̓̿̍̓̽̀̾͠k̸͎̼̝̩͉̜̣̠̾̋̍ȩ̷̮̣̱̽͑̏͌͌̈͝ͅ ̵͕͚̣̺̯̤͎̩̘̖̘̬̻̠͚͔͗͗̎̑̈́͑̋̉t̵̢̡̼̠̟̟̺͑̿̇̿͆̑͋͠o̵̡͕̟̭̣̗̖̙̠̦̞͛͜ ̴̨͕͈̞͈̲̫̠͖͖͎̭̭̠̪́̏b̴̛̛̤̾̈́͊̿̆͐̇͘͘ę̴̖̲̤͕͕̞͔̇̓̋͂̽̿̽̚͜ ̷̥͙͈̭̠̼̣̲̬͚̄̈́́̂̚͜͝b̶̡̨̛̖̩̙̯͚̲͇̜̞̜̝͓̒̋͗͊́̑̋̾͌͛̒̈́̾̒̚͜ͅe̸̢̡̗̖̹͓̻͓͈͉͕͓͈̽͜͜s̴̝̯̦̠͈͕̣̖̳̆͌̀͐̏͊́́̀̊͌̕͘͝͠i̸̹̟͕̼͓͎̘͉̙̮͔̖͓̻͂͗̔̑́̈́͒̈͂̓͆̈̕͘͝d̴̡̨͖̭̪̤̣̖́̍̍̑̂͆̿͋̏̈͘͜e̷͍̫̼̳͈̭͎̣̤̖̜͕͎͋̋̍́̈͗̈́ͅ ̵̤͕̹́͗̔̽̃t̸̳͙͉̹̯̩̦͎̼̲͙̰̳̐̔̓̕ͅh̴̡͚̠̦̻̙̹̱̪͙̿̉̈́͛̿̈́̔̏̔̌̚̚͝͝ȩ̴̼̦̪͉͎͇͕̄̅̽̔̉́͆̎̕͠͝͝ ̵̢̨̡̢̖̗̼̼͎̓̍̊͒̆̔́̌͑͋̈̔́̓ş̶̩͕̫̹̪͍̂͌͛̈́͠͝ę̴͉͉̥͎̥̙̲̜̟̲͙̤̱̽͋̏̃̈́̒̈́̕̚̕a̵̧̼̯̞͈͍̻̞͕̱̭̳̐̈̎̒̿̾̾͂̀̒͒͂̆͂̕͝s̸̬͚̮̃̏͊̈́̊̉̉̈̈́͆̊̑̾̕͝͝ì̴̢͈̭̼̟͇̫̘͓͠ḍ̵̨̧̘̩̲͇̤̥̼̫̳̼͈̝̄̌̆͒̓̂̓̓͆͗́̐̚͜͝è̴̲̟̔͛́͒</a></li>
                    <li><a href="#">O̷̠͉̜̞̱̮̩̩̰̰̩̯͖̬͉͂̍͆̍̊̿́͒̈́̔̕h̶̨̙̖̥̞̻̻̳̻̲͎̰̃͒͐̆̋̍̓̓̍̾͐͂͜͝͝͝͝͝ͅͅ ̴̫͕͓́̐̂̀́̾̾́̒̆͝͝Į̷̼͈̥̓̎̃̂͂͑̾̓̒̕͠͠ ̷̘̩͔͚̺͇̤̲̲̣̥̓̊̓͆̓̓̀̏̊̊̈́͘͝d̸̜̤̻̮̞͓̖̣͖̗͆͒̑̂́̓̌̕͝ǫ̴̛͚͉͈͎̹͈͚̻̺̭͕̱̐͆̎̈́̾̅͌̄̌̇͝͝ ̴̘͎͈͇̠̘̎̃̒͒̄̍̇̈́́̽̀̌͘͝l̵̡̡̺̼͎͊͝ĩ̵͓̘̖̬͚̋͒̈́̅͘͝ķ̵̢͈̖͉͍̣͎̖̘̭̼̭̳̋͂́͊̅̍̔̀̅̉̄̃̎̾̌͑͠e̶̯̳̜͕̫͎̞̟̟̞͈͎̍̉̾͆̕͘͜͝ ̸̛̟̜̘̟̻̥͖͓̖́̍̎͋͂̾͐̔̐̕͝ṭ̵̢̧̲̭̦̇̄̀̿ớ̷̢̬͈̬̺͗̓̐͌̍͗̃͠ͅ ̵̯̭̙̱̱̱̦̠͐̈̏͋́b̴͓͓͖̯͉͘ȩ̷̨̬̤̱̭̻̱̯́̏̄͊̌͛̆̔̂̕̚ ̶̢̛͓͎̟͇̠̗̎̂̒̈́̓̚͝͝b̷̰͕̳̮̲̣̊̏̑̈͌̈́̃͌̀̐̏́̊͘e̸̡͓̹͗̒̏͋s̶̛̹̦͗̒͘̕ȋ̵̞̳̙͊̎͆͂͛͊̍̓͘͘ḏ̶̛͚͉̟̭̯̱̏̎̊͐̅͛̚ḙ̵̖͖̩̺̓̏͛͒́̊́͌̍̿͐̍͜͜͠͠͝ ̴͈͈̦͔̤̊ͅt̵̢̘̫̟̲̗̥̬̓̈́̾̈́͘̕h̵̬̺̠̬͙̅̊̔̾̾̑̑̏͊ę̶̡͍̙̺̬͙̰͖̩̖̣͔̙̀͑͐̄̂͗͝ͅ ̶̨͇͙̱̤͖̣͓̤̰͇̭̬̏͑͋͊̉̊͘͝ş̶͉͕͖͔̔͒͑̔̍̔̉̕͠ė̶̛̟̳̭̫̾͊̑͐̓͛a̷̡̩̥̗̽͌̈́̽͊̇̅̋̈͊͑̇́̆͝͝</a></li>
                    <li><a href="#">A̸̼̝̯͔͉̠͇̹͐l̵̦̙̰̠͇͇̯̱̳̤̥̫̒̈̽̈̋͆̈̈̏͋̋t̴̡̧̬͕̙̻̣̲͖̼͙̼̣̗̰̖͋͋̈́͝͝ͅḩ̸̧̛̭̝̞̬̣̼̎̄̈́̎̃͂͠ǫ̸͈̬̙͂̓͑̔͝u̶̱̺͙̹̻̖͊ģ̸̜̩̠̭͇̻̻̣͒̓̈́̐̾́̃̂̀̀́̈́͠ͅh̷̩̞͎̰̪͉͉̀͠ ̶̡̥̪̯̥͙̞͉̭̈́̔̌̈́̊̓̀̅̾̚̕͝͝͠î̶̡̨̜̜̥̥̙̩̺͉͎̪̻̲́̌̂͋̀͗̍̽͌͗͋̈́̍̕n̶̦̈́͐͋͒̐̆̈́̐̌̔͊̅̕ ̴̧̨͍̦̞̪̭͖̣̦̟̥̓́͒̾̋͑̊̀̔̀̿͂̽̏͘̕͜͠ͅt̵̻͔̼͙͓̉̍̏̆́̈́̒̄̋͐̏̂̎̚͠h̷̗͇͔̣͆͑̅͌͒͌e̶̲̗̺̤̤͈̟̰̙͔̙̤̩̣̎́͗̽͗͐̾́̄͌̈́͒̚͝ ̴̢̳͎̥̣̭͔̖̒̄N̷̢̨͎̣̮̥̺̬͓̣̊̑̀̈̃̍̈̏̾͗̐̊͒͜͝ȍ̶͚͔́͂ŗ̵̧̛̛̗̋̀̈́̂̀͊͛̄̚͠͠t̷̞̣̀̈̑̈́̒̒̈́̓͋̽̄͆̚͝͠͝ḧ̸̻͈̳̤̬͙̠͚̯́̂͂̋̊͌̈́͘͠ ̶̞̠̭̝̖̈́̋̃͠͝ò̴̢̨̳͖̫̻͔͖̝̞̩̝̪͎̖̲͎̃͋͗̌̈͒̓̌̌̏̇͂f̴̨̛͚̺͍̘̂̎̐̑́́͊̎̇̐̚͝͝͝ ̵̯̘͕̜̲͎̩̭͙̙͖̄̈́͋̔̆̐̓͊̌E̶̱͚̼̻͇̟̰͓̾ͅn̸͔͖͕̥̂̓̈́̓͑̾͝ĝ̵̦̥̫͓͉̟̯̝̲͕͆̑͂̓̋͗̚͘̕̚l̵̨̡̟̩̤̼̤̳̺̳̭̺̯̩̀̋̒́̃̀͗̉͒̕̕͜͜͜͝͝a̵̙̹̻̩͚͙̗̦̔̿̐̂n̷̙̝̝̔̌̌͐̈́́̑͛͝d̸̢͓̝̗̈͌͑̏̈́͝</a></li>
                    <li><a href="#">I̴̡͚͖̥̲̗̰͈̲̻͕͎̽͊̏͂͌̈́̑͒̓̃͂͊̾͑̇ͅͅt̴̨͕̺͖̜̭̥͖͉̜́̇ ̵͙̩͔̆̌̽̌̀̄̀̈́̐̐͊̏͊͊͋͝ñ̷̩̖̙͌́̀̚e̶̡̫̙̰̭͒̀̋͛̎̈́̀̂̆̔͜v̵̩̫̰͎͈̠̱̹̓̏̎̉͐̅̈ͅe̷̢͎͖̩̤̠͙̩̹̻̽̃̇̈̈́͂͐͆̈́̅̊̔̇͝͝r̵̫̘̩͚̳̥̩̮̐͂̅͂̀͑͊̍̀̅͛̀̿͘͜ ̸̢̱͕̗͚̤̹̬̪̓̉̄̃͊̔͜s̸͚͕̐̀̎̀͑̋̊̒̿̓͌͘̕̚ẗ̶͔̭̪͔̯̯̲̦̟̖̠͔̩̭͚̣́̌͋̊̍͆͋̋̔͋̊̄̈́̈ͅớ̸̱̦̺̹̣̤͈͙͕̖͔̼̟̪͎̖͚͛̆̓̂͐́͒̔̆̅͐͠p̵̦̼͉̜̞̟̲̭͇̮̬͔̤̦̔̎̊͑̆̏̌s̷̪͙̱̘̮̤͊̊̃͆̈̌ͅ ̶̢̤͓̲͓̩̯̫̟̠̬͎̻̑̉̾̃̄̑͂̈́͒̌̐̚͠ṟ̴̅̌́ā̸̢̧̨̛̮̺̥̠̝̱̲͈͕̰̺͍̔̑̾̊i̵̭̒̔̓̽̓̈́̈́̀n̴̘̩̥̉̑̃͊̆̾͐̂̏͌͜ḯ̵̛̯̖̣̈́̋̈́͛͑̍̃͗͋͑ń̷̼̗̠̗̣̗̲̮̜̻͉͕̞̲̀͗̅̔̕g̶̡̻͖̱̹͎̖͚͉̪̪̓̃́̾̌̒͐́͆͐</a></li>
                    <li><a href="#">Oh well…</a></li>
                </ul>
            </aside>
            <section class="content">
                <p>This site is currently a Work in Progress and will be updated sooner or later.</p>
                <p>Please come back and visit us sometime.</p>
                <p><a href="registration.html">Register Your account today!</a></p>
            </section>

        </main>
        <footer>
            <p>&copy; 2024 Gritlands. All rights reserved.</p>
        </footer>
    </body>
</html>