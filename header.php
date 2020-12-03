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
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<header>
    <nav class="container-fluid">
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

