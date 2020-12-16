<?php
    include 'includes/common.php';

    if(!isset($_SESSION['email'])) {
        header('Location: index.php');
    }

    $email = $_SESSION['email'];
    $curr = $_POST['currentPassword'];
    $new = $_POST['newPassword'];
    $confirm = $_POST['confirmPassword'];

    $result = mysqli_query($con, "SELECT password FROM users WHERE email = '$email'");

    if($curr != $result['password']){
        echo "<script> alert('Incorrect Password!!!')</script>";
        header('Location: setting.php');
    }
    else {
        if($new != $confirm) {
            echo "<script> alert('Password not matched!!')</script>";
            header('Location: setting.php');
        }
        else {
            $query = mysqli_query($con, "UPDATE users SET password = '$new' WHERE email = '$email'");
            header('Location: product.php');
        }
    }
