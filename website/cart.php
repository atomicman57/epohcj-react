<?php include 'include/header.inc.html'; ?>
<title>Cart | PhantFashion</title>
</head>
<body>
<?php include 'include/navigation.inc.html'; ?>

<div style="margin-top: 20px;"></div>

<section id="wrapper" class="active_grid">
    <div class="container">
        <div id="content-wrapper">
            <section id="main">
                <div class="cart-grid row">
                    <div class="cart-grid-body col-xs-12 col-lg-8">
                        <div class="card cart-container">
                            <div class="card-block">
                                <h1 class="h1">Shopping Cart</h1>
                            </div>
                            <hr>
                            <div class="cart-overview js-cart">
                                <ul class="cart-items">
                                    <li class="cart-item">
                                        <div class="product-line-grid">
                                            <div class="product-line-grid-left col-md-3 col-xs-4">
                                                <span class="product-image media-middle">
                                                    <img src="http://demo.fieldthemes.com/ps_modo/home1/28-cart_default/printed-dress.jpg" alt="Lorem Ipsum has.">
                                                </span>
                                            </div>
                                            <div class="product-line-grid-body col-md-4 col-xs-8">
                                                <div class="product-line-info">
                                                    <a class="label" href="">Name of product</a>
                                                </div>
                                                <div class="product-line-info">
                                                    <span class="value">₦23.39</span>
                                                </div>
                                                <br/>
                                                <div class="product-line-info">
                                                    <span class="label">Title:</span>
                                                    <span class="value">Value</span>
                                                </div>
                                                <div class="product-line-info">
                                                    <span class="label">Title:</span>
                                                    <span class="value">Value</span>
                                                </div>
                                            </div>
                                            <div class="product-line-grid-right product-line-actions col-md-5 col-xs-12">
                                                <div class="row">
                                                    <div class="col-xs-4 hidden-md-up"></div>
                                                    <div class="col-md-10 col-xs-6">
                                                        <div class="row">
                                                            <div class="col-md-6 col-xs-6 qty">
                                                                <input
                                                                    class="js-cart-line-product-quantity"
                                                                    type="text"
                                                                    value="1"
                                                                    name="product-quantity-spin"
                                                                    min="1"
                                                                />
                                                            </div>
                                                            <div class="col-md-6 col-xs-2 price">
                                                                <span class="product-price">
                                                                    <strong>
                                                                        ₦23.39
                                                                    </strong>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-xs-2 text-xs-right">
                                                        <div class="cart-line-product-actions">
                                                            <a
                                                            class="remove-from-cart"
                                                            href=""
                                                            >
                                                                <i class="material-icons pull-xs-left">delete</i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a class="label" href="">
                            <i class="material-icons">chevron_left</i>Continue shopping
                        </a>
                    </div>
                    <div class="cart-grid-right col-xs-12 col-lg-4">
                        <div class="card cart-summary">
                            <div class="cart-detailed-totals">
                                <div class="card-block">
                                    <div class="cart-summary-line" id="cart-subtotal-products">
                                        <span class="label js-subtotal">
                                            1 item
                                        </span>
                                        <span class="value">₦23.39</span>
                                    </div>
                                    <div class="cart-summary-line" id="cart-subtotal-shipping">
                                        <span class="label">
                                            Shipping
                                        </span>
                                        <span class="value">₦7.00</span>
                                        <div><small class="value"></small></div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-block">
                                    <div class="cart-summary-line cart-total">
                                        <span class="label"><strong>Total</strong></span>
                                        <span class="value"><strong>₦30.39</strong></span>
                                    </div>
                                </div>
                                <hr>
                            </div>
                            <div class="checkout cart-detailed-actions card-block">
                                <div class="text-xs-center">
                                    <a href="" class="btn btn-primary">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>

<?php include 'include/footer.inc.html'; ?>