<?php

    session_start();
    require("../../connect.php");

    if (isset($_POST['signin'])) {
        $email = mysqli_real_escape_string($db, trim(strip_tags($_POST['log_email'])));
        $password = mysqli_real_escape_string($db, trim(strip_tags($_POST['log_pass'])));

        $result = mysqli_query($db, "SELECT * FROM users WHERE '$email' = `email_address` ");
        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if ($password === $row['password']) {
                    if ($row['roleID'] == "2") {
                        header("location: ../../admin/");
                    }
                }
                else{
                    echo "wrong username or password";
                }
            }
            else {
            echo "No user with such registration";
            }
        }
        else {
            echo "query error";
        }
    }

?>