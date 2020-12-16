<?php
    include '../projectBootstrap/includes/common.php';
        if (isset($_SESSION['email'])) {
            header("location: ../projectBootstrap/product.php");
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    <link rel="stylesheet" href="css/main.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Sign Up</title>
</head>
<body>

   <?php
        include '../projectBootstrap/includes/header.php'
   ?>

    <div class="container" style="margin-top: 75px;">
        <div class="row">

            <div class="col-xs-3"></div>
            <div class="col-xs-6">
                <h3>SIGN UP</h3>

                <form method="post" action="../projectBootstrap/includes/signup_script.php">

                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name">

                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" required pattern="[a-z0-9._+-] + @[a-z0-9._]+\.[a-z]{2,3}$">

                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" required pattern="{6,}" >

                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="contact" placeholder="Contact">

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="city" placeholder="City">

                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="address" placeholder="Address">

                    </div>

                    <button href="login.php" class="btn btn-primary" type="submit">Submit</button>


                </form>

            </div>

        </div>
    </div>



   <?php
        include '../projectBootstrap/includes/footer.php';
   ?>

</body>
</html>