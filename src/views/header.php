<?php # Script 12.4 - loggedin.php
// The user is redirected here from login.php.

include('mysqli_connect.php');

session_start();

error_reporting(!8);
// If no cookie is present, redirect the user:
if (!isset($_SESSION['user_id'])) {

	// Need the functions:
	require ('functions.php');
	redirect_user();

}

// Set the page title and include the HTML header:

$pageTitle = "Welcome";


$query = "SELECT user_id, name, email FROM users WHERE user_id = ".$_SESSION['user_id'];

$run = mysqli_query($dbc, $query); //Run the query and store the results in a variable

if (mysqli_num_rows($run) == 1){
	$row = mysqli_fetch_array($run, MYSQLI_ASSOC);
	// Print a customized message:
}else{
	echo "Error!";
}

mysqli_close($dbc);


?>

<?php
require_once('functions.php');
// $pageTitle = "Class 23";


if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
}

 ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap stylesheet -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-- Note: External stylesheets must come after Bootstrap stylesheet -->
        <link href="CSS/indexView-styles.css" rel="stylesheet" type="text/css" />
        <link href="CSS/searchView-styles.css" rel="stylesheet" type="text/css" />
		<link href="CSS/cartView-styles.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="CSS/header.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>Amazon Smile</title>
    </head>
    <body>
        <!-- Image and text -->
        <nav id="navbar1" class="navbar">
            <ul class="navbar-nav">
                <li><img id='logo' alt="AmazonLogo" src="images/amaz.png" /></li>
            </ul>
			<form action="search.php" method="post">
				<div>
	            <input type="text" name="search"/>
	                <button type="submit" id="searchButton"><i class="fa fa-search"></i></button>
	                <!-- <input type="submit" value="Search" name="submit"> -->
	            </div>
			</form>
            <img id='backToSchool' src="http://blog.neurogistics.com/wp-content/uploads/2014/08/Back-To-School-Special-Banner.jpg" alt="" />
        </nav>
        <nav id="navbar2" class="navbar navbar-expand-sm">
            <ul class="navbar-nav">
                <li>
                    <!-- <div id="supporting"> -->
                    <a id="supporting" class="nav-link" href="#"><p id="orange">Supporting: </p> American Red Cross</a>
                    <!-- </div> -->
                </li>
            </ul>
        </nav>
        <nav id="navbar3" class="navbar navbar-expand-sm">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Deliver to <?php echo $row['name']; ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Browsing History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Today's Deals</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $row['name']; ?>'s Amazon.com</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Buy Again</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Help</a>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                  <!-- <button class="dropbtn">Dropdown</button> -->
                  <a class="nav-link" href="#">Hello <?php echo $row['name'];?>, Accounts & Lists</a>
                  <div class="dropdown-content">
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="http://localhost:8080/amazonClone/src/views/loggedOutView.php">Sign Out</a>
                  </div>
                </div>

            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Orders</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Prime</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cartView.php">Cart</a>
            </li>
          </ul>
        </nav>
    <!-- </body>
</html> -->
