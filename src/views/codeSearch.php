<?php

include 'header.php';




// require_once ('includes/functions.php');
//
// 	// Need the database connection:
// require ('includes/mysqli_connect.php');

if ($_REQUEST['sort'] == 'price_high'){
	redirect_user('login.php');
}elseif($_REQUEST['sort'] == 'customer_review'){
	redirect_user('login.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// SELECT product_id, product_img_url, name, review_stars, review_num, price_dollars, price_cents, is_prime, product_condition, tag_1, tag_2 FROM products WHERE name = 'headphones' OR tag_1 = 'headphones' OR tag_2 = 'headphones'
	require ('mysqli_connect.php');
	// require_once ('functions.php');

	// Need the database connection:


	$searchQ = $_POST['search'];
	// echo $searchQ;
	// Check the login:
	// list ($check, $data) = check_search($dbc, $searchQ);
	//
	// if ($check) { // OK!


		$query2 = "SELECT product_id, product_img_url, name, review_stars, review_num, price_dollars, price_cents, is_prime, product_condition, tag_1, tag_2 FROM products WHERE name = '$searchQ' OR tag_1 = '$searchQ' OR tag_2 = '$searchQ';";



 ?>
