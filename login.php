<?php include "templates/header.php"; ?>
<title>Login</title>
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

<div class="breadcrumb clearfix">
    <ul>
        <li class="home">
            <a class="home" href="#" title="Return to Home">Home</a>
        </li>
        <li class="last">
            Authentication
        </li>
    </ul>
</div>

<div class="row">
<div id="center_column" class="center_column col-xs-12 col-md-10">

<div id="home-column">

  <div class="wrapper container">
  <div class="row equals-height">
  <div class="col-xs-12 col-sm-6">
    <form action="#" method="post" id="create-account_form" class="box">
      <h3 class="page-heading">Create an account</h3>
      <div class="form_content clearfix">
        <p>Please enter your email address to create an account.</p>
        <div class="form-group">
          <label for="email_create">Email address</label>
          <input type="email" class="is_required validate account_input form-control" data-validate="isEmail" id="email_create" name="email_create" placeholder="E-mail" value="" />
        </div>
        <div class="submit">
          <input type="hidden" class="hidden" name="back" value="#" />
          <button class="btn btn-primary btn-md" type="submit" id="SubmitCreate" name="SubmitCreate">
            <span>
              Create an account
            </span>
          </button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-xs-12 col-sm-6">
    <form action="#" method="post" id="login_form" class="box">
      <h3 class="page-heading">Already registered?</h3>
      <div class="form_content clearfix">
        <div class="form-group">
          <label for="email">Email address</label>
          <input class="is_required validate account_input form-control" data-validate="isEmail" type="email" id="email" name="email" placeholder="E-mail" value="" />
        </div>
        <div class="form-group">
          <label for="passwd">Password</label>
          <input class="is_required validate account_input form-control" type="password" data-validate="isPasswd" id="passwd" name="passwd" placeholder="Password" value="" />
        </div>
        <p class="lost_password form-group">
          <a href="#" title="Recover your forgotten password" rel="nofollow">Forgot your password?</a>
        </p>
        <p class="submit">
          <button type="submit" id="SubmitLogin" name="SubmitLogin" class="btn btn-primary btn-md">
            <span>
              Sign in
            </span>
          </button>
        </p>
      </div>
    </form>
  </div>
</div>
  </div>
</div>
</div><!-- #center_column -->

<div id="left_column" class="column col-xs-12 col-md-2">
<section class="block">
  <div class="block_content left_column_menu column_menu top-level tmmegamenu_item">
  <?php include "templates/aside-navigation.php"; ?>  
  </div>
</section>
<div style="margin-bottom: 50px;"></div>
</div>
</div><!--.row-->
</main><!-- #columns -->
<?php include "templates/footer.php"; ?>
</div>
</body>
</html>