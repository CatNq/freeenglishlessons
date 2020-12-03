<!-- đăng kí đăng nhập đăng kí khóa học tham gia khóa học -->

<?php
    include 'header.php';
?>
    <main>
        <div class="container">
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
            <section class="center-main">
                    <div>
                        <div class="card">
                            <img src="img/logo-1.png" alt="Avatar" style="width:50%">
                            <div class="container">
                                <h4><b>test</b></h4>
                                <p>Course-1</p>
                            </div>
                        </div>
                    </div>
            </section>
        </div>
    </main>
<?php
    include 'footer.php';
?>
