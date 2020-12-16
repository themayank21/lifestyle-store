
<?php
if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    $phone = mysqli_real_escape_string($con, $_POST['contact']);
    $add = mysqli_real_escape_string($con, $_POST['address']);
    $city = mysqli_real_escape_string($con, $_POST['city']);

    include 'common.php';

    $query = mysqli_query($con, "SELECT * FROM users WHERE email = '$email'");
    $num_rows = mysqli_num_rows($query);

    if($num_rows > 0) {
        echo '<script> alert("User Found!! Please Login")</script>';
        header('Location: ../login.php');
    }
    else {
        $ins = mysqli_query($con, "INSERT INTO users (name_user, email, password, contact, address, city) VALUES ('$name','$email','$pass','$phone','$add','$city')")
        or die(mysqli_error($con));

        $_SESSION['email'] = $email;
        $_SESSION['id'] = mysqli_insert_id($con);

        session_start();

        header('Location: ../product.php');

    }

}


