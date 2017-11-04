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
        <p>Enter your email address to request password reset</p>
        <div class="form-group">
          <label for="email_create">Email address</label>
          <input type="email" class="is_required validate account_input form-control" data-validate="isEmail" id="email_create" name="email_create" value="" />
        </div>
        <div class="submit">
          <input type="hidden" class="hidden" name="back" value="#" />
          <button class="btn btn-primary btn-md" type="submit" id="SubmitCreate" name="SubmitCreate">
            <span>
               Request reset
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