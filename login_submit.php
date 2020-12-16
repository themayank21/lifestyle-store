<?php
        include("includes/common.php");

            $user = $_POST['email'];
            $pass = $_POST['password'];

        $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$user' AND password = '$pass'");
        $result = mysqli_fetch_array($query);
        $num_rows = mysqli_num_rows($query);

        if ($num_rows == 1) {
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['email'] = $user;
            header('Location:product.php');
        }
        else {
            header('Location:login.php');
        }




