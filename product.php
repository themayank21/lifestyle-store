<?php
    include '../projectBootstrap/includes/common.php';
    if(!isset($_SESSION['email'])){
        header('Location: login.php');
    }
    $user = $_SESSION['email'];
    $query = mysqli_query($con, "SELECT name_user FROM users WHERE email = '$user'");
    $name = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/product.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Product</title>
</head>
<body>

<!--    Navigation header-->

    <?php
        include '../projectBootstrap/includes/header.php';
        include '../projectBootstrap/includes/check-if-added.php';

    ?>

<!--        Content         -->

        <div class="container jumbo">
            <div class="jumbotron">
                <center>
                    <h1>
                        Welcome <?php echo $name['name_user']; ?>
                    </h1>
                    <p>We have the best cameras, watches and shirts for you. No need to hunt around, we
                        have all in one place</p>

                </center>

            </div>

<!--            Camera section-->

            <div class="row text-center products">


                <div class="col-md-3 col-xs-6 ">
                    <img src="img/5.jpg" alt="Canon Camera" class="img-thumbnail" >
                    <div class="caption">
                        <h3>Canon EOS</h3>
                        <p>Price: Rs. 56000.00</p>
                        <?php
                            if(!isset($_SESSION['email'])) { ?>
                        <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                            else {
                                if(check_if_added_to_cart(1)) {
                                    echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                }
                                else { ?>
                        <a href="../projectBootstrap/includes/cart-add.php?id='1'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                               <?php }
                            }?>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6 ">
                    <img src="img/2.jpg" alt="Sony Camera" class="img-thumbnail" >
                    <div class="caption">
                        <h3>Sony CyberShot</h3>
                        <p>Price: Rs. 36000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                        else {
                            if(check_if_added_to_cart(2)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else { ?>
                                <a href="../projectBootstrap/includes/cart-add.php?id='2'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                            <?php }
                        }?>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6 ">
                    <img src="img/3.jpg" alt="Sony Camera" class="img-thumbnail" >
                    <div class="caption">
                        <h3>Sony &#945</h3>
                        <p>Price: Rs. 55000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                        else {
                            if(check_if_added_to_cart(3)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else { ?>
                                <a href="../projectBootstrap/includes/cart-add.php?id='3'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                            <?php }
                        }?>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6 ">
                    <img src="img/4.jpg" alt="Olympus Camera" class="img-thumbnail" >
                    <div class="caption">
                        <h3>Olympus DSLR</h3>
                        <p>Price: Rs. 46000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                        else {
                            if(check_if_added_to_cart(4)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else { ?>
                                <a href="../projectBootstrap/includes/cart-add.php?id='4'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                            <?php }
                        }?>
                    </div>

                </div>



            </div>

<!--            Watch Section-->

            <div class="row text-center products">


                <div class="col-md-3 col-xs-6 ">
                    <img src="img/9.jpg" alt="Titan Watch" class="img-thumbnail" >
                    <div class="caption">
                        <h3>Titan Model #301</h3>
                        <p>Price: Rs. 13000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                        else {
                            if(check_if_added_to_cart(5)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else { ?>
                                <a href="../projectBootstrap/includes/cart-add.php?id='5'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                            <?php }
                        }?>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6 ">
                    <img src="img/10.jpg" alt="Titan Watch" class="img-thumbnail" >
                    <div class="caption">
                        <h3>Titan Model #201</h3>
                        <p>Price: Rs. 3000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                        else {
                            if(check_if_added_to_cart(6)) {
                                echo '<a href="#" role="button" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else { ?>
                                <a href="../projectBootstrap/includes/cart-add.php?id='6'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                            <?php }
                        }?>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6 ">
                    <img src="img/11.jpg" alt="HMT Watch" class="img-thumbnail" >
                    <div class="caption">
                        <h3>HMT Milan</h3>
                        <p>Price: Rs. 8000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                        else {
                            if(check_if_added_to_cart(7)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else { ?>
                                <a href="../projectBootstrap/includes/cart-add.php?id='7'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                            <?php }
                        }?>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6 ">
                    <img src="img/12.jpg" alt="Faber Luba" class="img-thumbnail" >
                    <div class="caption">
                        <h3>Faber Luba#111</h3>
                        <p>Price: Rs. 18000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                        else {
                            if(check_if_added_to_cart(8)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else { ?>
                                <a href="../projectBootstrap/includes/cart-add.php?id='8'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                            <?php }
                        }?>
                    </div>

                </div>



            </div>

<!--            Shirt section-->

            <div class="row text-center" style="margin-bottom: 12%">


                <div class="col-md-3 col-xs-6 ">
                    <img src="img/6.jpg" alt="Luis Phil" class="img-thumbnail" >
                    <div class="caption">
                        <h3>Luis Phil</h3>
                        <p>Price: Rs. 1000.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                        else {
                            if(check_if_added_to_cart(9)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else { ?>
                                <a href="../projectBootstrap/includes/cart-add.php?id='9'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                            <?php }
                        }?>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6 ">
                    <img src="img/8.jpg" alt="H&W" class="img-thumbnail" >
                    <div class="caption" style="padding-top: 23px">
                        <h3>H&W</h3>
                        <p>Price: Rs. 800.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                        else {
                            if(check_if_added_to_cart(10)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else { ?>
                                <a href="../projectBootstrap/includes/cart-add.php?id='10'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                            <?php }
                        }?>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6 ">
                    <img src="img/13.jpg" alt="John Zok" class="img-thumbnail" >
                    <div class="caption">
                        <h3>John Zok</h3>
                        <p>Price: Rs. 1500.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                        else {
                            if(check_if_added_to_cart(11)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else { ?>
                                <a href="../projectBootstrap/includes/cart-add.php?id='11'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                            <?php }
                        }?>
                    </div>

                </div>

                <div class="col-md-3 col-xs-6 ">
                    <img src="img/14.jpg" alt="Jhalsani" class="img-thumbnail" >
                    <div class="caption">
                        <h3>Jhalsani</h3>
                        <p>Price: Rs. 1300.00</p>
                        <?php
                        if(!isset($_SESSION['email'])) { ?>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        <?php }
                        else {
                            if(check_if_added_to_cart(12)) {
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                            }
                            else { ?>
                                <a href="../projectBootstrap/includes/cart-add.php?id='12'" class="btn btn-primary btn-block" name="add" value="add" >Add to cart</a>
                            <?php }
                        }?>
                    </div>

                </div>



            </div>

        </div>



<!--        Footer-->

    <?php
        include '../projectBootstrap/includes/footer.php';
    ?>


</body>
</html>