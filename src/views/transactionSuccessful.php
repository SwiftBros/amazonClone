<?php

    echo "<p>Thank you for your purchase!</p>";

    // Code to delete rows from cart table
    session_start();
    $id = $_SESSION['user_id'];
    // echo $id;

    require('mysqli_connect.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $query = "DELETE FROM cart WHERE user_id = $id";
        $run = mysqli_query($dbc, $query);

        $rows = mysqli_fetch_array($run, MYSQLI_ASSOC);

        if (isset($row['description'])) { // if empty table
			echo "<p>Delete success!</p>";
		} else {
			echo "<p>Unable to delete.</p>";
			echo "<p>".mysqli_error($dbc)."</p>";
		}
    }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <p style='text-align:center'><a href="indexView.php">Continue shopping</a></p>
    </body>
</html>
