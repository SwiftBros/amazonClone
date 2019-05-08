<?php
$searchQ = $_POST['search'];
$query2 = "SELECT product_id, product_img_url, name, review_stars, review_num, price_dollars, price_cents, is_prime, product_condition, tag1, tag2 FROM users WHERE name = " .$_searchQ. " OR tag1 = " .$searchQ. "OR tag2 = " .$searchQ;

$run = mysqli_query($dbc, $query2); //Run the query and store the results in a variable

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
}else{ //If no records are returned by the query, print a message to the user
	echo "<p>There are currently no registered users</p>";
}


mysqli_close($dbc);

?>
