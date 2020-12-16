<?php
    include 'includes/common.php';
    $item_id = $_GET['id'];
    $user = $_SESSION['user_id'];

    $result = mysqli_query($con, "DELETE FROM users_items WHERE user_id='$user' AND item_id='$item_id'")
    or die(mysqli_error($con));

    header('Location: cart.php');