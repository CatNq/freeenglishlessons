<?php

    if (isset($_POST['submit-getcourse'])) {
        
        require 'dbh.inc.php';

        $title = $_POST['take-course'];

        if (empty($title)) {
            header("Location: ../index.php?error=emptyfields");
            exit();
        }
        else {
            $sql = "SELECT * FROM courses WHERE titleCourses=?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: ../index.php?error=sqlerror");
                exit();
            }
            else {

                mysqli_stmt_bind_param($stmt, "s", $title);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    $pwdCheck = password_verify($password, $row['pwdUsers']);
                    if ($pwdCheck == false) {
                        header("Location: ../index.php?error=loginrequired");
                        exit();
                    }
                    elseif ($pwdCheck == true) {
                        session_start();
                        $_SESSION['userId'] = $row['idUsers'];
                        $_SESSION['userUid'] = $row['uidUsers'];
                        
                        // code here to get and display course

                        //header("Location: ../index.php?login=success");
                        //exit();

                    }

                }
                else {
                    header("Location: ../index.php?error=nouser");
                    exit();
                }

            }
        }
    
    }
    else {
        header("Location: ../index.php");
        exit();
    }
