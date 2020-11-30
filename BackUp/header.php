<?php
    include_once 'includes/dbh.php';
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
            <li><a href="index.php">About</a></li>
        </ul>
        <div class="header-login">
            <form action="includes/login.php" method="POST">
                <input type="text" name="mailuid" placeholder="Username/Email">
                <input type="password" name="pwd" placeholder="Passwpord">
                <button type="submit" name="login">Login</button>
            </form>
            <a href="includes/signup.php">Sign up</a>
            <form action="includes/logout.php" method="POST">
                <button type="submit" name="Logout">Logout</button>
            </form>
        </div>
    </nav>
</header>

<body>

