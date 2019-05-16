<?php

    // Form submission validation
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        include('functions.php');

        session_start();
        $user_for_cart = $_SESSION['user_id'];

        // PASSED IN VARIABLES FROM SEARCH VIEW
        if(isset($_POST['product_img_url'])) $cart_img_url=$_POST['product_img_url'];

        if(isset($_POST['name'])) $cart_name=$_POST['name'];

        if(isset($_POST['price_dollars'])) $cart_price_dollars=$_POST['price_dollars'];

        if(isset($_POST['price_cents'])) $cart_price_cents=$_POST['price_cents'];

        if(isset($_POST['is_prime'])) $cart_is_prime=$_POST['is_prime'];

        // Code to check if variables were passed through

        // echo $cart_img_url;
        // echo "<br />";
        //
        // echo $cart_name;
        // echo "<br />";
        //
        // echo $cart_price_dollars;
        // echo "<br />";
        //
        // echo $cart_price_cents;
        // echo "<br />";
        //
        // echo $cart_is_prime;
        // echo "<br />";
        //
        // echo "User ID: " .$user_for_cart;
        // echo "<br />";

        require('mysqli_connect.php');
        // $errors = array(); //Intialize an array that will store error messages for the user

        // Variables to post
        $c_img_url = mysqli_real_escape_string($dbc, $cart_img_url);
        $c_name = mysqli_real_escape_string($dbc, $cart_name);
        $c_price_d = mysqli_real_escape_string($dbc, $cart_price_dollars);
        $c_price_c = mysqli_real_escape_string($dbc, $cart_price_cents);
        $c_quantity = '1';
        $c_is_prime = mysqli_real_escape_string($dbc, $cart_is_prime);
        $c_user_id = mysqli_real_escape_string($dbc, $user_for_cart);


        $query = "INSERT INTO cart VALUES (
            'NULL',
            '$c_img_url',
            '$c_name',
            '$c_price_d',
            '$c_price_c',
            '$c_quantity',
            '$c_is_prime',
            '$c_user_id'
        )";

        $run = mysqli_query($dbc, $query); //Run the query

        if ($run) {
            echo "<p>Added to cart successfully!</p>";
        } else {
            echo "<p>Error. Couldn't add to cart!</p>";
            echo "<br />";
            //Print a debugging message
			echo "<p>".mysqli_error($dbc)."</p>";
            mysqli_close($dbc); //Close the db connection
	        exit(); //Terminate the execution of the script
        }

        echo "<a href='search.php'>Continue shopping</a>";

        mysqli_close($dbc);
    }
?>

<script>
    alert("Added to Cart!");
</script>
