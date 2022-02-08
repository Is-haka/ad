<?php

    session_start();
    require("../../connect.php");

    if (isset($_POST['register'])) {
        $fullname = mysqli_real_escape_string($db, trim(strip_tags($_POST['full_name'])));
        $email = mysqli_real_escape_string($db, trim(strip_tags($_POST['email'])));
        $paddress = mysqli_real_escape_string($db, trim(strip_tags($_POST['physical_address'])));
        $gender = mysqli_real_escape_string($db, trim(strip_tags($_POST['gender'])));
        $pass = mysqli_real_escape_string($db, trim(strip_tags($_POST['password'])));
        $cpass = mysqli_real_escape_string($db, trim(strip_tags($_POST['confirm_password'])));

        $result = mysqli_query($db, "SELECT * FROM users WHERE '$email' = 'email_address' ");
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                echo "User already exist";
                header("refresh:1; ../../index.php");
            }
            elseif (mysqli_num_rows($result) < 1) {
                if ($pass == $cpass) {
                    $query = "INSERT INTO users(`fullname`, `email_address`, `physical_address`, `password`, `genderID`)
                    VALUES('$fullname', '$email', '$paddress', '$pass', '$gender')";
                    $result = mysqli_query($db, $query);
                    if ($result) {
                        var_dump($query);
                    }
                    else {
                        echo "problem with registration";
                    }
                }
            }
        }
    }

?>