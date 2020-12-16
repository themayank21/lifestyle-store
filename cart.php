<?php
include '../projectBootstrap/includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <link rel="stylesheet" href="css/main.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
</head>
<body>

<!--        Navigation Header        -->

<?php
    require 'includes/header.php';
?>

<!--        Content-->
<div class="container cart">
    <div class="row">
        <div class="col-xs-3"></div>
        <div class=" col-xs-6">
            <div class="table-responsive">
                <table class="table table-hover ">
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th> </th>
                    </tr>
                    <?php

                    if(!isset($_SESSION['user_id'])) {
                        header('Location: login.php');
                    }
                    $user_id = $_SESSION['user_id'];
                    $query = mysqli_query($con, "SELECT items.id, items.name, items.price FROM items INNER JOIN users_items ON items.id = users_items.item_id WHERE users_items.user_id = '$user_id'");
                    $row_num = mysqli_num_rows($query);
                    if($row_num == 0) {
                        echo "<script>alert('Add items to the cart First!!!')</script>";
                    } else {
                        $sum = 0;
                        while ($row_num--) {
                            $result = mysqli_fetch_array($query);

                            ?>
                            <tr>
                                <th><?php echo "$result[0]";?></th>
                                <th><?php echo "$result[1]";?>/-</th>
                                <th>Rs <?php echo "$result[2]";?></th>
                                <th><a href='cart-remove.php?id={$result[0]}' class='remove_item_link btn btn-block btn-danger'> Remove</a></th>
                            </tr>
                            <?php
                            $sum += $result[2];
                        }
                    }
                    ?>

                    <tr>
                        <td> </td>
                        <td>Total</td>
                        <td>Rs <?php echo "$sum";?>/-</td>
                        <td><a class="btn btn-primary" onclick="fun()">Confirm Order</a></td>

                    </tr>

                </table>
            </div>

        </div>
    </div>
</div>

<script>
    function fun() {
        if(window.confirm("Thank You for the Purchase. Click Ok for Shop more")) {
            window.location.href="product.php";
        }
    }
</script>

<!--        Footer-->

<?php
include 'includes/footer.php';
?>

</body>
</html>