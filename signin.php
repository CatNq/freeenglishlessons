<?php
    include 'header.php';
?>

<main>
    <div class="container my-3 bg-white text-black rounded-lg w-25 mt-5 shadow p-4 mb-4 bg-white">
        <section class="section-default">
            <h1>Sign in</h1>

            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="POST">
                    <button class="col" type="submit" name="logout-submit">Logout</button>
                </form>';
                }
                else {
                    echo '<form action="includes/login.inc.php" method="POST">
                    <input class="col" type="text" name="mailuid" placeholder="Username/Email">
                    <input class="col" type="password" name="pwd" placeholder="Password">
                    <button class="col" type="submit" name="login-submit">Login</button>
                </form>
                or
                <a href="signup.php">sign up</a>';
                }
            ?>
        </section>
    </div>
</main>

<?php
    include 'footer.php';
?>