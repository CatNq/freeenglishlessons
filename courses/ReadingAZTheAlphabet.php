<?php
    include_once '../includes/dbh.inc.php';
    session_start();
    //if (isset($_SESSION['userId'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Varela+Round">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<header>
    <nav class="container-fluid p-1 bg-dark text-white">
        <a href="../index.php" class="header-logo">
            <img src="../htdocs/freeenglishlessons/img/Logo-1.png" alt="logo">
        </a>
        
        <?php
            if (isset($_SESSION['userId'])) {
                echo '<a href="../page.php" class="text-info">Home</a>';
            }
            else {
                echo '';
            }
        ?>
        
        <div class="header-login">

            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="../includes/logout.inc.php" method="POST">
                    <button class="col" type="submit" name="logout-submit">Logout</button>
                </form>';
                }
                else {
                    echo '<form action="signin.php">
                    <button type="submit">Log in</button> or 
                    <button type="submit" formaction="signup.php">Sign up</button>
                </form>';
                }
            ?>
        </div>
    </nav>
</header>

<body>
                                        <!-- code owr ddaay -->
                                        <!-- code owr ddaay -->
                                        <!-- code owr ddaay -->
</body>

<footer class="container-fluid p-1 my-5 bg-dark text-white">
        <a><a href="contact.php" class="col">Contact</a></a>
        <a><a href="about.php" class="col">About</a></a>
</footer>

</html>