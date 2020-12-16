` <?php
    include 'common.php';
    $us_id = $_SESSION['user_id'];
    function check_if_added_to_cart($item_id){
        global $us_id;
        global $con;
        $query = "SELECT * FROM users_products WHERE product_id='$item_id' AND user_id = '$us_id' and status='Added To Cart'";

        $query_result = mysqli_query($con, $query);

        if(mysqli_num_rows($query_result) >= 1){
            return 1;
        }else{
            return 0;
        }
    }