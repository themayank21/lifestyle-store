<?php
    include 'includes/common.php';

    if(!isset($_SESSION['email'])) {
        header('Location: index.php');
    }
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
    <title>Setting</title>
</head>
<body>

<!--Header Section-->

    <?php
        include 'includes/header.php';
    ?>

<!--Content-->

<div class="container" style="margin-top: 75px;">
    <div class="row">

        <div class="col-xs-3"></div>
        <div class="col-xs-6">
            <h3>SIGN UP</h3>

            <form method="post" action="setting_script.php">

                <div class="form-group">
                    <input type="password" class="form-control" name="currentPassword" placeholder="Old Password">

                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="newPassword" placeholder="New Password">

                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">

                </div>


                <a onclick="window.confirm('Password Changed')" class="btn btn-primary">Submit</a>


            </form>

        </div>

    </div>
</div>


<!--        Footer-->

<?php
    include 'includes/footer.php';
?>


</body>
</html>