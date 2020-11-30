<!-- đăng kí đăng nhập đăng kí khóa học tham gia khóa học -->

<?php
    include 'header.php';
?>
    <ul><a href="index.php">Home</a></ul>
    <ul><a href="index.php">Contact</a></ul>

    <h2>Signup</h2>
    <form action="includes/signup.php" method="POST">
        <?php
            if (isset($_GET['first'])) {
                $first = $_GET['first'];
                echo '<input type="=text" name="first" placeholder="first name" value="'.$first.'">';
            } else {
                echo '<input type="=text" name="first" placeholder="first name"> <br>';
            }
        ?>
        <?php
            if (isset($_GET['last'])) {
                $last = $_GET['last'];
                echo '<input type="=text" name="last" placeholder="last name" value="'.$last.'">';
            } else {
                echo '<input type="=text" name="last" placeholder="last name"> <br>';
            }
        ?>
        <input type="=text" name="email" placeholder="email"> <br>
        <?php
            if (isset($_GET['uid'])) {
                $uid = $_GET['uid'];
                echo '<input type="=text" name="uid" placeholder="username" value="'.$uid.'">';
            } else {
                echo '<input type="=text" name="uid" placeholder="username"> <br>';
            }
        ?>
        <input type="=password" name="pwd" placeholder="password">
        <button type="submit" name="submit">Sign up</button>
    </form>

    <?php
        if (!isset($_GET['signup'])) {
            exit();
        } else {
            $signupCheck = $_GET['signup'];

            if ($signupCheck == "empty"){
                echo "<p class='error'>U did not fill in all</p>";
                exit();
            }
            elseif ($signupCheck == "email"){
                echo "<p class='error'>invalid email</p>";
                exit();
            }
            elseif ($signupCheck == "success"){
                echo "<p class='success'>U have been signed up</p>";
                exit();
            }
        }

    ?>


<?php
    include 'footer.php';
?>
