<?php # Script 12.4 - loggedin.php
// The user is redirected here from login.php.

// session_start();
// // If no cookie is present, redirect the user:
// if (!isset($_SESSION['user_id'])) {
//
// 	// Need the functions:
// 	require ('functions.php');
// 	redirect_user();
//
// }
//
// // Set the page title and include the HTML header:
//
// $pageTitle = "Welcome";
//
// include('mysqli_connect.php');
//
// $query = "SELECT user_id, name, email FROM users WHERE user_id = ".$_SESSION['user_id'];
// $run = mysqli_query($dbc, $query);
//
// if (mysqli_num_rows($run) == 1){
// 	$row = mysqli_fetch_array($run, MYSQLI_ASSOC);
// 	// Print a customized message:
// 	// echo "<h1>Welcome!</h1>
// 	// <br />&nbsp;
// 	// <p>You are now logged in, ".$row['name']."!</p>
// 	// <p style='text-align:center;'><img src='https://via.placeholder.com/150x150'><br>
// 	// <strong>".$row['name']."</strong><br>
// 	// ".$row['email']."</p>
// 	// <p style='text-align:center'><a href=\"logout.php\">Logout</a></p>";
// }else{
// 	echo "Error!";
// }
// mysqli_close($dbc);

include ('indexView.php');
?>
