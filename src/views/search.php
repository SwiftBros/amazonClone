
<?php
include 'header.php';
$searchQ = $_POST['search'];
?>
        <div class='container-fluid'>
            <!-- Results header -->
            <div class='row results-header'>
                <div class='col-12'>
                    <span style='float: left;'>1-16 over 100,000 results for
                        <span id='item-results'><?php echo $searchQ; ?></span>
                    </span>
                    <span style='float: right;'>
                        <form action=''>
                            <select name='sort'>
                                <option value='price_low'>Sort by: Price Low to High</option>
                                <option value='price_high'>Sort by: Price High to Low</option>
                                <option value='customer_review'>Sort by: Avg. Customer Review</option>
                            </select>
                        </form>
                    </span>
                </div>
            </div>

            <!-- Search items: Left sidebar + Item records -->
            <div class='row search-items'>
                <div class'col-3 left-sidebar'>
                    <span class='sidebar-category'>Amazon Prime</span><br />
                    <input type='checkbox' name='prime' value='false'><img src='images/prime.png' class='prime' style='width:20%'/>
                    <br /><br />

                    <span class='sidebar-category'>Delivery Day</span><br />
                    <input type='checkbox' name='delivery' value='false'> Get It by Tomorrow<br /><br />

                    <span class='sidebar-category'>Avg. Customer Review</span><br />
                    <input type='image' src='images/4-stars.png' /> & Up<br />
                    <input type='image' src='images/3-stars.png' /> & Up<br />
                    <input type='image' src='images/2-stars.png' /> & Up<br />
                    <input type='image' src='images/1-star.png' /> & Up<br />
                    <br />

                    <span class='sidebar-category'>Condition</span><br />
                    <span>New</span><br />
                    <span>Used</span><br />
                </div>

                <div class='col-9 item-records'>


<?php


// require_once ('includes/functions.php');
//
// 	// Need the database connection:
// require ('includes/mysqli_connect.php');

if ($_REQUEST['sort'] == 'price_high'){
	redirect('http://google.com');
}elseif($_REQUEST['sort'] == 'customer_review'){
	redirect('http://yahoo.com');
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
			// echo "<p>There are currently $count products</p>";

			//Output the query results in a table
			// echo "<table border='1' class='table'>";

			while($row = mysqli_fetch_array($run, MYSQLI_ASSOC)){ //The mysqli_fetch_array function puts the results of the query into an array (can be indexed or associative)
echo "
				<!-- Start: RECYCLE ROW ITEM (THIS WHOLE DIV) BASED ON NUM OF ENTRIES -->
				<div class='row item'>
					<div class='col-3 item-image'>
						<img src='".$row['product_img_url']."' />
						<br />
					</div>

					<div class='col-9'>
						<span class='item-desc'>".$row['name']."1</span><br />
						<img src='".numStars($row['review_stars'])."' />
						<span class='review-num'>".$row['review_num']."</span><br /><br />
						<sup class='superscript'>$</sup><span class='price'>".$row['price_dollars']."</span><sup class='superscript'>".$row['price_cents']."</sup><br />

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
		primeDayString = 'Sun';
		break;
	case 1:
		primeDayString = 'Mon';
		break;
	case 2:
		primeDayString = 'Tues';
		break;
	case 3:
		primeDayString = 'Wed';
		break;
	case 4:
		primeDayString = 'Thurs';
		break;
	case 5:
		primeDayString = 'Fri';
		break;
	case 6:
		primeDayString = 'Sat';
		break;
	default:
		console.log('Error: Day value is invalid.');
}

// Store the Month
var primeMonthString;
switch (date.getMonth()) {
	case 0:
		primeMonthString = 'Jan';
		break;
	case 1:
		primeMonthString = 'Feb';
		break;
	case 2:
		primeMonthString = 'Mar';
		break;
	case 3:
		primeMonthString = 'Apr';
		break;
	case 4:
		primeMonthString = 'May';
		break;
	case 5:
		primeMonthString = 'Jun';
		break;
	case 6:
		primeMonthString = 'Jul';
		break;
	case 7:
		primeMonthString = 'Aug';
		break;
	case 8:
		primeMonthString = 'Sep';
		break;
	case 9:
		primeMonthString = 'Oct';
		break;
	case 10:
		primeMonthString = 'Nov';
		break;
	case 11:
		primeMonthString = 'Dec';
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
						".isPrime($row['is_prime'])."

						<span class='prime-get-by'>Get it as soon as <strong id='prime-date'>Fri, May 10</strong></span>

<script>
var result = primeDayString + ', ' + primeMonthString + ' ' + dd;
console.log(result);
var setDate = document.getElementById('prime-date');
setDate.innerHTML = result;
</script>
                        <iframe name='formSending' height='0' width='0'></iframe>
                        <form action='cartInsert.php' method='post' id='registerForm' target='formSending'>
                            <input type='submit' value='Add to cart' id='cart-button'/>
";


// SQL Query variables to pass to cartInsert.php
$product_img_url = $row['product_img_url'];
$name = $row['name'];
$price_dollars = $row['price_dollars'];
$price_cents = $row['price_cents'];
$is_prime = $row['is_prime'];

echo "<input type='hidden' name='product_img_url' value='" .$product_img_url. "'/>";
echo "<input type='hidden' name='name' value='" .$name. "'/>";
echo "<input type='hidden' name='price_dollars' value='" .$price_dollars. "'/>";
echo "<input type='hidden' name='price_cents' value='" .$price_cents. "'/>";
echo "<input type='hidden' name='is_prime' value='" .$is_prime. "'/>";

echo "
</form>
</div>
</div>

<!-- End: Recycle up to this point -->
";



			// 	echo "<tr>
			// 	<td>".$row['name']."</td>
			// 	<td>".$row['price_dollars']."</td>
			// 	<td>".$row['price_cents']."</td>";
			// 	echo "</tr>";
			// }
			// echo "</table>";
		}

			// include('searchView.php');
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






echo "
</div>
</div>
</div>";


include 'footer.php'; ?>
