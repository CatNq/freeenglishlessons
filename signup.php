<?php
    include 'header.php';
?>
    <main>
        <div class="wrapper-main">
            <section class="section-default">
                <h1>Sign up</h1>

                <?php
                    if (isset($_GET["error"])) {
                        if ($_GET["error"] == "emptyfields") {
                            echo '<p class="signuperror">Please fill in all fields</p>';
                        }
                        elseif ($_GET["error"] == "invalidmailuid") {
                            echo '<p class="signuperror">Invalid e-mail or username</p>';
                        }
                        elseif ($_GET["error"] == "invalidmail") {
                            echo '<p class="signuperror">Invalid e-mail</p>';
                        }
                        elseif ($_GET["error"] == "invaliduid") {
                            echo '<p class="signuperror">Invalid username</p>';
                        }
                        elseif ($_GET["error"] == "passwordCheck") {
                            echo '<p class="signuperror">Please check password again</p>';
                        }
                        elseif ($_GET["error"] == "usernametaken") {
                            echo '<p class="signuperror">Username already taken</p>';
                        }
                    }
                    if (isset($_GET["signup"])) {
                        if ($_GET["signup"] == "success") {
                            echo '<p class="signupsuccess">Sign up successful!</p>';
                        }
                    }
                ?>
                <form action="includes/signup.inc.php" method="POST">
                    <?php

                        if (isset($_GET['uid'])) {
                            $uid = $_GET['uid'];
                            echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'">';
                        } else {
                            echo '<input type="text" name="uid" placeholder="Username">';
                        }
                        if (isset($_GET['email'])) {
                            $email = $_GET['email'];
                            echo '<input type="text" name="mail" placeholder="Email" value="'.$email.'">';
                        } else {
                            echo '<input type="text" name="mail" placeholder="Email">';
                        }

                    ?>
                    <input type="password" name="pwd" placeholder="Password">
                    <input type="password" name="pwd-repeat" placeholder="Repeat password">
                    <button type="submit" name="signup-submit">Sing up</button>
                </form>
            </section>
        </div>
    </main>
<?php
    include 'footer.php';
?>