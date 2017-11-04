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
      <h3 class="page-heading">Password reset</h3>
      <div class="form_content clearfix">
        <p>Now we're sure it's you; <strong>2sweetworld@gmail.com</strong></p>
        <div class="form-group">
          <label for="new_password">New password</label>
          <input type="password" class="account_input form-control" id="new_password" name="new_password" value="" />
        </div>
        <div class="form-group">
          <label for="confirm_password">Confirm password</label>
          <input type="password" class="account_input form-control" id="confirm_password" name="confirm_password" value="" />
        </div>
        <div class="submit">
          <input type="hidden" class="hidden" name="back" value="#" />
          <button class="btn btn-primary btn-md" type="submit" id="SubmitCreate" name="SubmitCreate">
            <span>
               Reset password
            </span>
          </button>
        </div>
        <p class="lost_password form-group">
          <a href="#" rel="nofollow"><<< Back to login</a>
        </p>
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