<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <link href="CSS/searchView-styles.css" rel="stylesheet" type="text/css" />

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <title>Amazon.com</title>
    </head>

    <body> -->

<?php include 'header.php'; ?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	// include('functions.php'); //Include the function.php file
	// $pageTitle = "Search View"; //Set the page title
	// include('functions.php'); //Include the function.php file
    //
	// // include('header.php'); //Include the header.php file
	// require('mysqli_connect.php');// Connect to the db

	$errors = array(); //Intialize an array that will store error messages for the user

	//Check for data entered into the 'last_name' form field
	// if(empty($_POST['last_name'])){
	// 	$errors[] = "You forgot to enter your last name.";
	// }else{
	// 	$ln = mysqli_real_escape_string($dbc, $_POST['last_name']);
	// }

	//Check for data entered into the 'email' form field
	if(empty($_POST['search'])){
		$errors[] = "You did not enter anything to search.";
	}else{
		$searchQ = mysqli_real_escape_string($dbc, $_POST['search']);
	}


	if(empty($errors)){ //If the user filled all the form fields

        // Create a query
        $query2 = "SELECT product_id, product_img_url, name, review_stars, review_num, price_dollars, price_cents, is_prime, product_condition, tag1, tag2 FROM users WHERE name = " .$_searchQ. " OR tag1 = " .$searchQ. "OR tag2 = " .$searchQ;

        $run = mysqli_query($dbc, $query2); //Run the query and store the results in a variable

		if($run){//If the query ran successfully
			// echo "<h1>Thank you!</h1> <p>You have been registered</p>";


			// I will attempt to redirect user to index with the correct credentials

			list ($check, $data) = check_login($dbc, $searchQ);

		    if ($check) { // OK!

		        // Set the session data:
		        // session_start();
		        // $_SESSION['user_id'] = $data['user_id'];
		        // $_SESSION['name'] = $data['name'];
                //
		        // // Redirect:
		        // redirect_user('indexView.php');
                $count = mysqli_num_rows($run); //Count the number of rows returned by the query

                //If the number of rows returned in greater than 0, display the results of the query
                if($count > 0){
                	//Print the number of users that exist
                	echo "<p>There are currently $count products</p>";

                	//Output the query results in a table
                	echo "<table border='1' class='table'>";
                	while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){ //The mysqli_fetch_array function puts the results of the query into an array (can be indexed or associative)
                		echo "<tr>
                		<td>".$row['name']."</td>
                		<td>".$row['price_dollars']."</td>
                		<td>".$row['price_cents']."</td>";
                		echo "</tr>";
                	}
                	echo "</table>";


		    } else { // Unsuccessful!

		        // Assign $data to $errors for error reporting
		        // in the login_page.inc.php file.
		        $errors = $data;

		    }
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
}

// $query2 = "SELECT product_id, product_img_url, name, review_stars, review_num, price_dollars, price_cents, is_prime, product_condition, tag1, tag2 FROM users WHERE name = " .$_searchQ. " OR tag1 = " .$searchQ. "OR tag2 = " .$searchQ;
//
// $run = mysqli_query($dbc, $query2); //Run the query and store the results in a variable
//
// $count = mysqli_num_rows($run); //Count the number of rows returned by the query
//
// //If the number of rows returned in greater than 0, display the results of the query
// if($count > 0){
// 	//Print the number of users that exist
// 	echo "<p>There are currently $count products</p>";
//
// 	//Output the query results in a table
// 	echo "<table border='1' class='table'>";
// 	while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){ //The mysqli_fetch_array function puts the results of the query into an array (can be indexed or associative)
// 		echo "<tr>
// 		<td>".$row['name']."</td>
// 		<td>".$row['price_dollars']."</td>
// 		<td>".$row['price_cents']."</td>";
// 		echo "</tr>";
// 	}
// 	echo "</table>";
// }else{ //If no records are returned by the query, print a message to the user
// 	echo "<p>There are currently no registered users</p>";
// }
//
//
// mysqli_close($dbc);

?>
        <div class="container-fluid">
            <!-- Results header -->
            <div class="row results-header">
                <div class="col-12">
                    <span style="float: left;">1-16 over 100,000 results for
                        <span id="item-results">"headphones"</span>
                    </span>
                    <span style="float: right;">
                        <form action="">
                            <select name="sort">
                                <option value="price_low">Sort by: Price Low to High</option>
                                <option value="price_high">Sort by: Price High to Low</option>
                                <option value="customer_review">Sort by: Avg. Customer Review</option>
                            </select>
                        </form>
                    </span>
                </div>
            </div>

            <!-- Search items: Left sidebar + Item records -->
            <div class="row search-items">
                <div class="col-3 left-sidebar">
                    <span class="sidebar-category">Amazon Prime</span><br />
                    <input type="checkbox" name="prime" value="false"><img src="images/prime.png" class="prime" style="width:20%"/>
                    <br /><br />

                    <span class="sidebar-category">Delivery Day</span><br />
                    <input type="checkbox" name="delivery" value="false"> Get It by Tomorrow<br /><br />

                    <span class="sidebar-category">Avg. Customer Review</span><br />
                    <input type="image" src="images/4-stars.png" /> & Up<br />
                    <input type="image" src="images/3-stars.png" /> & Up<br />
                    <input type="image" src="images/2-stars.png" /> & Up<br />
                    <input type="image" src="images/1-star.png" /> & Up<br />
                    <br />

                    <span class="sidebar-category">Condition</span><br />
                    <span>New</span><br />
                    <span>Used</span><br />
                </div>

                <div class="col-9 item-records">

                    <!-- Start: RECYCLE ROW ITEM (THIS WHOLE DIV) BASED ON NUM OF ENTRIES -->
                    <div class="row item">
                        <div class="col-3 item-image">
                            <img src="images/headphones-2.jpg" />
                            <br />
                        </div>

                        <div class="col-9">
                            <span class="item-desc">On Ear Headphones with Mic, Vogek Lightweight Portable Fold-Flat Stereo Bass Headphones with 1.5M Tangle Free Cord and Microphone-Black</span><br />
                            <img src="images/4-stars.png" />
                            <span class="review-num">248</span><br /><br />
                            <sup class="superscript">$</sup><span class="price">12</span><sup class="superscript">99</sup><br />

<script>
	// JS Functionality for getting date 2 days from now

	// Instantiate date object, add 2 days from now to date
	var date = new Date();
	var numberOfDaysToAdd = 2;
	date.setDate(date.getDate() + numberOfDaysToAdd);

	// Store the Day
	var primeDayString;
	switch (date.getDay()) {
		case 0:
			primeDayString = "Sun";
			break;
		case 1:
			primeDayString = "Mon";
			break;
		case 2:
			primeDayString = "Tues";
			break;
		case 3:
			primeDayString = "Wed";
			break;
		case 4:
			primeDayString = "Thurs";
			break;
		case 5:
			primeDayString = "Fri";
			break;
		case 6:
			primeDayString = "Sat";
			break;
		default:
	    	console.log('Error: Day value is invalid.');
	}

	// Store the Month
	var primeMonthString;
	switch (date.getMonth()) {
		case 0:
			primeMonthString = "Jan";
			break;
		case 1:
			primeMonthString = "Feb";
			break;
		case 2:
			primeMonthString = "Mar";
			break;
		case 3:
			primeMonthString = "Apr";
			break;
		case 4:
			primeMonthString = "May";
			break;
		case 5:
			primeMonthString = "Jun";
			break;
		case 6:
			primeMonthString = "Jul";
			break;
		case 7:
			primeMonthString = "Aug";
			break;
		case 8:
			primeMonthString = "Sep";
			break;
		case 9:
			primeMonthString = "Oct";
			break;
		case 10:
			primeMonthString = "Nov";
			break;
		case 11:
			primeMonthString = "Dec";
			break;
		default:
	    	console.log('Error: Month value is invalid.');
	}

	// Format to dd/mm/yyyy
	var dd = date.getDate();
	var mm = date.getMonth() + 1;
	var y = date.getFullYear();

	var formattedDate = dd + '/'+ mm + '/'+ y;

	console.log(primeDayString);
	console.log(primeMonthString);
	console.log(formattedDate);

</script>
							<!-- Add this img if item is prime -->
                            <img src="images/prime.png" class="prime" />

                            <span class="prime-get-by">Get it as soon as <strong id="prime-date">Mon, May 6</strong></span>

<script>
	var result = primeDayString + ", " + primeMonthString + " " + dd;
	console.log(result);
	var setDate = document.getElementById("prime-date");
	setDate.innerHTML = result;
</script>

							<input type="button" value="Add to cart" id="cart-button"/>
                        </div>
                    </div>
                    <!-- End: Recycle up to this point -->
                </div>
            </div>
        </div>
    <!-- </body>
</html> -->

<?php include 'footer.php'; ?>
