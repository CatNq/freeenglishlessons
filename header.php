<?php
    include_once 'includes/dbh.inc.php';
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<header>
    <nav class="nav-header-main">
        <a href="index.php" class="header-logo">
            <img src="img/logo-1.png" alt="logo">
        </a>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="about.php">About</a></li>
        </ul>
        <div class="header-login">

            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="POST">
                    <button type="submit" name="logout-submit">Logout</button>
                </form>';
                }
                else {
                    echo '<form action="includes/login.inc.php" method="POST">
                    <input type="text" name="mailuid" placeholder="Username/Email">
                    <input type="password" name="pwd" placeholder="Passwpord">
                    <button type="submit" name="login-submit">Login</button>
                </form>
                <a href="signup.php">Sign up</a>';
                }
            ?>
        </div>
    </nav>
</header>

<body>

