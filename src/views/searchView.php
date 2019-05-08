

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
	            <input type="text" name="search"/>
	            <div id="submitForm">
	                <button type="submit" class="icon button"><i class="fa fa-search"></i></button>
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
              <a class="nav-link" href="#">Deliver to Dewan</a>
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
              <a class="nav-link" href="#">Cart</a>
            </li>
          </ul>
        </nav>
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
                    <div class='row item'>
                        <div class='col-3 item-image'>
                            <img src='images/headphones-2.jpg' />
                            <br />
                        </div>

                        <div class='col-9'>
                            <span class='item-desc'>On Ear Headphones with Mic, Vogek Lightweight Portable Fold-Flat Stereo Bass Headphones with 1.5M Tangle Free Cord and Microphone-Black</span><br />
                            <img src='images/4-stars.png' />
                            <span class='review-num'>248</span><br /><br />
                            <sup class='superscript'>$</sup><span class='price'>12</span><sup class='superscript'>99</sup><br />

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
                            <img src='images/prime.png' class='prime' />

                            <span class='prime-get-by'>Get it as soon as <strong id='prime-date'></strong></span>

<script>
	var result = primeDayString + ', ' + primeMonthString + ' ' + dd;
	console.log(result);
	var setDate = document.getElementById('prime-date');
	setDate.innerHTML = result;
</script>

							<input type='button' value='Add to cart' id='cart-button'/>
                        </div>
                    </div>
                    <!-- End: Recycle up to this point -->
                </div>
            </div>
        </div>
    <!-- </body>
</html> -->

<?php include 'footer.php'; ?>
