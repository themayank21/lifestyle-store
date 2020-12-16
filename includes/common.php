<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $db  = "store";

    $con = mysqli_connect($servername, $username, $password, $db)
            or die(mysqli_error($con));

    if(!isset($_SESSION['email'])) {
        session_start();

    }