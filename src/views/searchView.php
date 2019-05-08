
<?php include 'header2.php'; ?>

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
