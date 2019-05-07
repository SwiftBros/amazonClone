<?php # Script 12.6 - logout.php
// This page lets the user logout.

//Access the existing session
session_start();

// If no cookie is present, redirect the user:
if (!isset($_SESSION['user_id'])) {

	// Need the function:
	require ('functions.php');
	redirect_user();

} else { // Delete the cookies:
	$_SESSION = array(); // Clear the variables.
	session_destroy(); // Destroy the session itself.
	setcookie ('PHPSESSID', '', time()-3600, '/amazonClone/src/views', '', 0, 0); // Destroy the cookie.
}

// Set the page title and include the HTML header:
include('functions.php');
$pageTitle = "Goodbye!";

// include('includes/header.php');

// Print a customized message:
echo "<h1>Goodbye!</h1>
<p>You are now logged out!</p>";

// include ('includes/footer.php');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Amazon Sign Out Screen</title>
    </head>
    <body>
        <p style='text-align:center'><a href="login.php">Sign In</a></p>
    </body>
</html>
