<?php include 'include/header.inc.html'; ?>
<title>Checkout | PhantFashion</title>
</head>
<body id="checkout">
<?php include 'include/navigation.inc.html'; ?>
<section id="wrapper" class="active_grid">
  <div class="container">
    <section id="content">
      <div class="row">
        <div class="col-md-8">
          <section id="checkout-personal-information-step" class="checkout-step -reachable -complete">
            <h1 class="step-title h3">
              <i class="material-icons done">&#xE876;</i>
              <span class="step-number">1</span>
              Personal Information
              <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> edit</span>
            </h1>
            <div class="content">
              <p class="identity">
                Connected as <a href='#'>Edimaobong Matthew</a>.
              </p>
              <p>
                Not you? <a href='#'>Log out</a>
              </p>
            </div>
          </section>
          <section id="checkout-addresses-step" class = "checkout-step -current -reachable js-current-step">
            <h1 class="step-title h3">
              <i class="material-icons done">&#xE876;</i>
              <span class="step-number">2</span>
              Shipping Address
              <span class="step-edit text-muted"><i class="material-icons edit">mode_edit</i> edit</span>
            </h1>
            <div class="content">
              <div class="js-address-form">
                <form method="POST" action="">
                  <p>
                    The selected address will be used both as your personal address (for invoice) and as your delivery address.
                  </p>
                  <div id="delivery-address">
                    <div class="js-address-form">
                      <section class="form-fields">
                        <div class="form-group row">
                          <label class="col-md-3 form-control-label required">
                            Address
                          </label>
                          <div class="col-md-6">
                            <select
                            class="form-control form-control-select js-country"
                            name="id_country"
                            required>
                              <option value disabled selected>-- please choose --</option>
                              <option value="1">6 Ogbonna Street, Upper Meniru, Enugu</option>
                              <option value="2">6 Matthews Street, Ikot Odongo, Etim Ekpo, Akwa Ibom</option>
                            </select>
                          </div>
                        </div>
                      </section>
                      <footer class="form-footer clearfix">
                        <a href="#">Add new address</a>
                      </footer>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </section>
          
          <section class="checkout-step -unreachable" id="checkout-delivery-step">
            <h1 class="step-title h3">
              <span class="step-number">3</span> Measurement
            </h1>
          </section>
        </div>

        <div class="col-md-4">
          <section id="js-checkout-summary" class="card js-cart">
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
          </section>
          <div id="block-reassurance">
            <ul>
              <li>
                <div class="block-reassurance-item">
                  <img src="images/security-policy-icon.png" alt="Security policy">
                  <a href="#"><span class="h6">Security policy</span></a>
                </div>
              </li>
              <li>
                <div class="block-reassurance-item">
                  <img src="images/delivery-policy.png" alt="Delivery policy">
                  <a href="#"><span class="h6">Delivery policy</span></a>
                </div>
              </li>
              <li>
                <div class="block-reassurance-item">
                  <img src="images/return-policy-icon.png" alt="Return policy">
                  <a href="#"><span class="h6">Return policy</span></a>
                </div>
              </li>
            </ul>
          </div>
          <div class="clearfix text-center">
            <button type="submit" class="checkout-btn btn btn-primary">
              Checkout
            </button>
          </div>
          <p></p>
          <p class="text-muted">You will be redirect to our merchant platform to make payment</p>
        </div>
      </div>
    </section>
  </div>
</section>

<?php include 'include/footer.inc.html'; ?>