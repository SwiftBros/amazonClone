<?php

// require_once ('includes/functions.php');
//
// 	// Need the database connection:
// require ('includes/mysqli_connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	// SELECT product_id, product_img_url, name, review_stars, review_num, price_dollars, price_cents, is_prime, product_condition, tag_1, tag_2 FROM products WHERE name = 'headphones' OR tag_1 = 'headphones' OR tag_2 = 'headphones'
	require_once ('functions.php');

	// Need the database connection:
	require ('mysqli_connect.php');
	$searchQ = $_POST['search'];
	echo $searchQ;
	// Check the login:
	// list ($check, $data) = check_search($dbc, $searchQ);
	//
	// if ($check) { // OK!


		$query2 = "SELECT product_id, product_img_url, name, review_stars, review_num, price_dollars, price_cents, is_prime, product_condition, tag_1, tag_2 FROM products WHERE name = '$searchQ' OR tag_1 = '$searchQ' OR tag_2 = '$searchQ';";

		// $query2 = "SELECT product_id, product_img_url, name, review_stars, review_num, price_dollars, price_cents, is_prime, product_condition, tag_1, tag_2 FROM products WHERE name = 'headphones' OR tag_1 = 'headphones' OR tag_2 = 'headphones';";

		$run = mysqli_query($dbc, $query2); //Run the query and store the results in a variable

		// if (mysqli_num_rows($run) >= 1) {
		//
		// 	// Fetch the record:
		// 	$row = mysqli_fetch_array ($r, MYSQLI_ASSOC);
		//
		// 	// Return true and the record:
		// 	return array(true, $row);
		//
		// } else { // Not a match!
		// 	$errors[] = 'The email address and password entered do not match those on file.';
		// }


		$count = mysqli_num_rows($run); //Count the number of rows returned by the query

		//If the number of rows returned in greater than 0, display the results of the query

		if($count > 0){
			//Print the number of users that exist
			echo "<p>There are currently $count products</p>";

			//Output the query results in a table
			// echo "<table border='1' class='table'>";
			while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){ //The mysqli_fetch_array function puts the results of the query into an array (can be indexed or associative)

				echo "<tr>
				<td>".$row['name']."</td>
				<td>".$row['price_dollars']."</td>
				<td>".$row['price_cents']."</td>";
				echo "</tr>";
			}
			echo "</table>";


			include('searchView.php');
		}else{ //If no records are returned by the query, print a message to the user
			echo "<p>There are currently no registered users</p>";
		}

	// } else { // Unsuccessful!
	//
	// 	// Assign $data to $errors for error reporting
	// 	// in the login_page.inc.php file.
	// 	$errors = $data;
	//
	// }

	mysqli_close($dbc); // Close the database connection.



	// mysqli_close($dbc);
}





	// Close the database connection.





?>
