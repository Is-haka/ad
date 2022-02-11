<?php

    session_start();
    require("../../connect.php");

    if (isset($_POST['register'])) {
        $fullname = mysqli_real_escape_string($db, trim(strip_tags($_POST['full_name'])));
        $email = mysqli_real_escape_string($db, trim(strip_tags($_POST['username'])));
        $paddress = mysqli_real_escape_string($db, trim(strip_tags($_POST['physical_address'])));
        $gender = mysqli_real_escape_string($db, trim(strip_tags($_POST['gender'])));
        $pass = mysqli_real_escape_string($db, trim(strip_tags($_POST['password'])));
        $cpass = mysqli_real_escape_string($db, trim(strip_tags($_POST['confirm_password'])));

        $result = mysqli_query($db, "SELECT * FROM users WHERE `email_address` = '$email' ");
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                $_SESSION["exists"] = "User already exist";
                header("location: ../../index.php");
            }
            elseif (mysqli_num_rows($result) < 1) {
                if ($pass == $cpass) {
                    $query = "INSERT INTO users(`fullname`, `email_address`, `physical_address`, `password`, `genderID`)
                    VALUES('$fullname', '$email', '$paddress', '$pass', '$gender')";
                    $iresult = mysqli_query($db, $query);
                    if ($iresult) {
                        var_dump($iresult);
                        $_SESSION['success'] = "account created successfully";
                        header("location: ../../index.php#contact");
                    }
                    else {
                        $_SESSION['problem'] = "problem with registration";
                        header("location: ../../index.php#contact");
                    }
                }
                else {
                    $_SESSION["wrongpass"] = "Password missmatched";
                    header("location: ../../index.php#contact");
                }
            }
        }
    }

?>