<?php

    session_start();
    require("../../connect.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="../../vendor/bootstrap/css/bootstrap.min.css">
</head>
<body>
    

    <div class="container text-center">
    <?php
    
    if (isset($_POST['signin'])) {
        $email = mysqli_real_escape_string($db, trim(strip_tags($_POST['log_uname'])));
        $password = mysqli_real_escape_string($db, trim(strip_tags($_POST['log_pass'])));

        $result = mysqli_query($db, "SELECT * FROM users WHERE '$email' = `email_address` ");
        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                if ($password === $row['password']) {
                    if ($row['roleID'] == "2") {
                        header("location: ../../admin/");
                    }
                    else{
                        ?>
                        <p class="alert-danger" style="padding: 12px; margin:5%; font-size: 18px;">
                        <?php
                        echo "<span class='badge alert-danger text-danger'>sorry this page is comming soon! <br><br> Wait a few second and you <br><br> will be redirected to the homepage, thank you!</span>";
                        header("refresh:4; ../../index.php#contact");
                        ?>
                        </p>
                        <?php
                    }
                }
                else{
                    $_SESSION["wrong"] = "wrong username or password";
                    header("location: ../../index.php#contact");
                }
            }
            else {
            $_SESSION["notregistered"] = "No user with such registration";
            header("location: ../../index.php#contact");
            }
        }
        else {
            $_SESSION["logproblem"] = "problem with registration contact system administartor";
            header("location: ../../index.php#contact");
        }
    }
    
    ?>
    </div>


</body>
</html>