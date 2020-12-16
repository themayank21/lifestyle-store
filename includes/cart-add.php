<?php

    include 'common.php';
    $items_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO users_items (user_id, item_id, status) VALUES ($user_id, $items_id, 'Added to cart')";

    $query = mysqli_query($con, $sql) or die(mysqli_error($con));
    header('Location: ../cart.php');
