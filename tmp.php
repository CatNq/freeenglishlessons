CREATE TABLE users (
	user_id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    user_first varchar(256) not null,
    user_last varchar(256) not null,
    user_email varchar(256) not null,
    user_uid varchar(256) not null,
    user_password varchar(256) not null
);

INSERT INTO users (user_first, user_last, user_email, user_uid, user_password)
    VALUES ('first', 'last', 'a@gmail.com', 'cat', 'cat');


<?php
    include 'header.php';
?>

<?php
    include 'footer.php';
?>

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