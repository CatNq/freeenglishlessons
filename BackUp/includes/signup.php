<?php

    if (isset($_POST['submit'])) {

        include_once 'dbh.php';

        $first = $_POST['first'];
        $last = $_POST['last'];
        $email = $_POST['email'];
        $uid = $_POST['uid'];
        $pwd = $_POST['pwd'];

        //not empty
        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){
            header("Location: ../index.php?signup=empty");
            exit();
        } else {
            //Validate mail
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                header("Location: ../index.php?signup=email&first=$first&last=$last&uid=$uid");
                exit();
            } else {
                $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_password) VALUES ('$first', '$last', '$email', '$uid', '$pwd');";
                mysqli_query($conn, $sql);
                 //insert to db
                 header("Location: ../index.php?signup=success");
            }
        }

    } else {
        header("Location: ../index.php?signup=error");
        exit();
    }
    
?>