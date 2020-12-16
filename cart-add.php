<?php
    include 'includes/common.php';
    $item_id = $_GET['id'];
    $user = $_SESSION['user_id'];

    $result = mysqli_query($con, "INSERT INTO users_items(user_id, item_id, status) VALUES ('$user', '$item_id', 'Added to cart')");

    header('Location: product.php');

