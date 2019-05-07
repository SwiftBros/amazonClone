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
                    <div class="col-8">
                        TEST
                    </div>

                    <div class="col-3">
                        <div id="cart-price">$12.99</div>
                    </div>

                    <div class="col-1">
TEST
                    </div>
                </div>
                <!-- RECYCLE ENDING POINT -->

            </div>

            <div class="col-3">
                <div class="checkout-card">
                    <div id="subtotal-label">Subtotal (1 item): <span style="color: #B12E25;">$12.99</span></div>
                    <input type="checkbox" /><span id="checkbox-gift">&nbsp;&nbsp;This order contains a gift</span>
                    <br /><br />
                    <input type="submit" value="Proceed to checkout" />
                </div>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
