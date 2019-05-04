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

                            <!-- Add this if item is prime -->
                            <!-- TODO: Add JS/jQuery functionality for dates (+2 days from current_date)-->
                            <img src="images/prime.png" class="prime" />
                            <span class="prime-get-by">Get it as soon as <strong>Mon, May 6</strong></span>
                        </div>
                    </div>
                    <!-- End: Recycle up to this point -->
                </div>
            </div>
        </div>
    <!-- </body>
</html> -->

<?php include 'footer.php'; ?>
