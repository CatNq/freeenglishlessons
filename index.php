<!-- đăng kí đăng nhập đăng kí khóa học tham gia khóa học -->

<?php
    include 'header.php';
?>
    <main>
        <div class="wrapper-main">
            <section class="section-default">

                <?php
                    if (isset($_SESSION['userId'])) {
                        echo '<p class="login-status">You are logged in!</p>';
                    }
                    else {
                        echo '<p class="login-status">You are not logged in, Please login to continue!</p>';
                    }
                ?>
            </section>
        </div>
    </main>
<?php
    include 'footer.php';
?>
