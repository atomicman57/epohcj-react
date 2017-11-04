<?php include "templates/header.php"; ?>
<title>Password reset</title>
</head>
<body>
  <?php include "templates/navigation.php"; ?>
    <div class="col-xs-12 hidden-md">
      <div class="module ">
        <div class="top_menu top-level tmmegamenu_item">
          <div class="menu-title tmmegamenu_item">Menu</div>
          <?php include "templates/aside-navigation.php"; ?>
        </div>
      </div>
    </div>  
  </div>
</div>
</header>

<main id="columns" class="container">

<div class="row">
<div class="col-xs-12">

<div id="home-column">

  <div class="wrapper container">
  <div class="row equals-height">
  <div class="col-sm-6 col-sm-offset-3">
    <form action="#" method="post" id="create-account_form" class="box">
      <h3 class="page-heading">Welcome!</h3>
      <div class="form_content clearfix">
        <p>Please fill in a few data to get started with PhantFashion</p>
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="account_input form-control" id="name" name="name" value="" placeholder="John Smith" />
        </div>
        <div class="form-group">
          <label for="new_password">New password</label>
          <input type="password" class="account_input form-control" id="new_password" name="new_password" value="" />
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm password</label>
          <input type="password" class="account_input form-control" id="confirm_password" name="confirm_password" value="" />
        </div>
        <div class="form-group">
          <label for="address">Shipping address (be as detailed as possible)</label>
          <input type="text" class="account_input form-control" id="address" name="address" value="" placeholder="No. 6 Ogbonna Street, Upper Meniru, Enugu" />
        </div>
        <div class="form-group">
          <label for="landmark">Landmark (nearby hotel, school or church)</label>
          <input type="text" class="account_input form-control" id="landmark" name="landmark" value="" placeholder="Opposite St. Theresa's Catholic Church" />
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <select class="account_input form-control" id="state" name="state">
                <option value="">--Please select--</option>
                <option value="Abuja">Abuja</option>
                <option value="Abia">Abia</option>
                <option value="Adamawa">Adamawa</option>
                <option value="Akwa Ibom">Akwa Ibom</option>
                <option value="Anambra">Anambra</option>
                <option value="Bauchi">Bauchi</option>
                <option value="Bayelsa">Bayelsa</option>
                <option value="Benue">Benue</option>
                <option value="Borno">Borno</option>
                <option value="Cross River">Cross River</option>
                <option value="Delta">Delta</option>
                <option value="Ebonyi">Ebonyi</option>
                <option value="Edo">Edo</option>
                <option value="Ekiti">Ekiti</option>
                <option value="Enugu">Enugu</option>
                <option value="Gombe">Gombe</option>
                <option value="Imo">Imo</option>
                <option value="Jigawa">Jigawa</option>
                <option value="Kaduna">Kaduna</option>
                <option value="Kano">Kano</option>
                <option value="Katsina">Katsina</option>
                <option value="Kebbi">Kebbi</option>
                <option value="Kogi">Kogi</option>
                <option value="Kwara">Kwara</option>
                <option value="Lagos">Lagos</option>
                <option value="Nassarawa">Nassarawa</option>
                <option value="Niger">Niger</option>
                <option value="Ogun">Ogun</option>
                <option value="Ondo">Ondo</option>
                <option value="Osun">Osun</option>
                <option value="Oyo">Oyo</option>
                <option value="Plateau">Plateau</option>
                <option value="Rivers">Rivers</option>
                <option value="Sokoto">Sokoto</option>
                <option value="Taraba">Taraba</option>
                <option value="Yobe">Yobe</option>
                <option value="Zamfara">Zamfara</option>
            </select>
        </div>
        <div class="form-group">
            <label id="agree" style="font-weight: normal">
                <input type="checkbox" id="agree" name="agree"> By registering, you agree to our
                <a href="#">Terms and conditions</a>
            </label>
        </div>
        <div class="submit">
          <input type="hidden" class="hidden" name="back" value="#" />
          <button class="btn btn-primary btn-md" type="submit" id="SubmitCreate" name="SubmitCreate">
            <span>
                Register
            </span>
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
  </div>
</div>
</div><!-- #center_column -->

</div>
</div><!--.row-->
</main><!-- #columns -->
<?php include "templates/footer.php"; ?>
</div>
</body>
</html>