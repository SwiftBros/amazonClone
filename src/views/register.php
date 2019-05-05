<?php
//This script performs an INSERT query to add a record to the users table

// Check for form submission
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// include('functions.php'); //Include the function.php file
	$pageTitle = "Register"; //Set the page title
	include('functions.php'); //Include the function.php file

	// include('header.php'); //Include the header.php file
	require('mysqli_connect.php');// Connect to the db

	$errors = array(); //Intialize an array that will store error messages for the user

	//Check for data entered into the 'first_name' form field
	if(empty($_POST['name'])){
		$errors[] = "You forgot to enter your first name.";
	}else{
		$n = mysqli_real_escape_string($dbc, $_POST['name']);
		/*This function escapes special characters in a string for use in an SQL statement. Both parameters are required: the first specifies the MySQL connection to use, the second is the string to be escaped
		*/
	}

	//Check for data entered into the 'last_name' form field
	// if(empty($_POST['last_name'])){
	// 	$errors[] = "You forgot to enter your last name.";
	// }else{
	// 	$ln = mysqli_real_escape_string($dbc, $_POST['last_name']);
	// }

	//Check for data entered into the 'email' form field
	if(empty($_POST['email'])){
		$errors[] = "You forgot to enter your email.";
	}else{
		$e = mysqli_real_escape_string($dbc, $_POST['email']);
	}

	//Check for data entered into the 'password' form field
	if(empty($_POST['password'])){
		$errors[] = "You forgot to enter your password.";
	}else{
		$p = mysqli_real_escape_string($dbc, $_POST['password']);
	}

	if(empty($errors)){ //If the user filled all the form fields
		//Create a query to insert a record
		$query = "INSERT INTO users (name, email, password)VALUES('$n','$e',SHA1('$p'))";

		$run = mysqli_query($dbc, $query); //Run the query

		if($run){//If the query ran successfully
			echo "<h1>Thank you!</h1> <p>You have been registered</p>";
		}else{ //If the query did not run successfully
			echo "<h1>Error!<h1> <p>You could not be registered. Please try again.</p>";

			//Print a debugging message
			echo "<p>".mysqli_error($dbc)."</p>";

		mysqli_close($dbc); //Close the db connection
		exit(); //Terminate the execution of the script
		}
	}else{ //If the user did not fill all the form fields, print the errors
		echo "<h2>Error!</h2>";
		echo "<p>The following error(s) have occured:<br />";
		foreach ($errors as $error){
			echo " - $error <br />";
		}
		echo "Please try again.</p>";
	}
	mysqli_close($dbc);//Close the db connection

	// include('footer.php');
}
?>
