<?php
    include 'includes/common.php';

    if (isset($_SESSION['email'])) {
        header('location: products.php');
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
    <title>Login</title>
</head>
<body>

<!--        Navigation Header        -->

    <?php
        include '../projectBootstrap/includes/header.php';
    ?>

<!--        Content-->

<div class="container">
    <div class="row row-span">
        <div class="col-xs-8"></div>
        <div class="col-md-4 ">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>LOGIN</h3>

                </div>

                <div class="panel-body">
                    <p class="text-warning">Login to make a Purchase</p>
                    <div class="row">
                        <div class="col-xs-12">
                            <form method="post" action="login_submit.php">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                        <input type="password" name="password" class="form-control " required>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Remember me
                                    </label>
                                </div>
                                <button class="btn btn-primary" type="submit">Login</button>
                            </form>

                        </div>
                    </div>


                </div>

                <div class="panel-footer">
                    <p>
                        Don't have an account? <a href="../projectBootstrap/signup.php" class="text-primary">Register </a>
                    </p>
                </div>

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