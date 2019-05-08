<?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row cart-view">
            <div class="col-9">
                <div id="shopping-cart-label">Shopping Cart</div>
                <div class="row cart-table-header">
                    <div class="col-8">
                    </div>

                    <div class="col-3">
                        Price
                    </div>

                    <div class="col-1">
                        Quantity
                    </div>
                </div>

                <!-- RECYCLE STARTING POINT -->
                <div class="row cart-table">
                    <div class="col-8"> <!-- column for item details-->
                        <div class="row item-row">
                            <div class="col-3 item-image">
                                <img src="images/headphones-2.jpg" />
                                <br />
                            </div>

                            <div class="col-9">
                                <span class="item-desc">On Ear Headphones with Mic, Vogek Lightweight Portable Fold-Flat Stereo Bass Headphones with 1.5M Tangle Free Cord and Microphone-Black</span><br />

                                <!-- TODO: Add this if item is prime -->
                                <img src="images/prime.png" class="prime" />
                                <br />

                                <input type="checkbox" /><span id="checkbox-gift">&nbsp;&nbsp;This is a gift</span>
                                <span class="hyperlink"> Learn more</span>
                                <br />

                                <!-- TODO: remove this from HTML and DELETE from database on click -->
                                <input type="submit" value="Delete" />
                            </div>
                        </div>
                    </div>

                    <div class="col-3"> <!-- Column for price -->
                        <div id="cart-price">$12.99</div>
                    </div>

                    <div class="col-1 quantity-form"> <!-- Column for quantity drop down -->
                        <form action="">
                            <select name="pick-quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="">6+</option> <!-- TODO: js onclick replace this with an input textbox -->
                            </select>
                        </form>
                    </div>
                </div>
                <!-- RECYCLE ENDING POINT -->

                <!-- RECYCLE STARTING POINT -->
                <div class="row cart-table">
                    <div class="col-8"> <!-- column for item details-->
                        <div class="row item-row">
                            <div class="col-3 item-image">
                                <img src="images/headphones-2.jpg" />
                                <br />
                            </div>

                            <div class="col-9">
                                <span class="item-desc">On Ear Headphones with Mic, Vogek Lightweight Portable Fold-Flat Stereo Bass Headphones with 1.5M Tangle Free Cord and Microphone-Black</span><br />

                                <!-- TODO: Add this if item is prime -->
                                <img src="images/prime.png" class="prime" />
                                <br />

                                <input type="checkbox" /><span id="checkbox-gift">&nbsp;&nbsp;This is a gift</span>
                                <span class="hyperlink"> Learn more</span>
                                <br />

                                <!-- TODO: remove this from HTML and DELETE from database on click -->
                                <input type="submit" value="Delete" />
                            </div>
                        </div>
                    </div>

                    <div class="col-3"> <!-- Column for price -->
                        <div id="cart-price">$12.99</div>
                    </div>

                    <div class="col-1 quantity-form"> <!-- Column for quantity drop down -->
                        <form action="">
                            <select name="pick-quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="">6+</option> <!-- TODO: js onclick replace this with an input textbox -->
                            </select>
                        </form>
                    </div>
                </div>
                <!-- RECYCLE ENDING POINT -->

            </div>

            <div class="col-3">
                <div class="checkout-card">
                    <!-- TODO: Dynamically set price -->
                    <div id="subtotal-label">Subtotal (2 items): <span style="color: #B12E25;">$12.99</span></div>
                    <input type="checkbox" /><span id="checkbox-gift">&nbsp;&nbsp;This order contains a gift</span>
                    <br /><br />

                    <form action="transactionSuccessful.php" method="post">
                        <input type="submit" value="Proceed to checkout" />
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
