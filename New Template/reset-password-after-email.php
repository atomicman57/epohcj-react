<?php include 'include/header.inc.html'; ?>
<title>Reset password | PhantFashion</title>
</head>
<body id="index" class="lang-en country-us currency-usd layout-full-width page-index tax-display-disabled fullwidth">
  <main>
    
  <?php include 'include/navigation.inc.html'; ?>
            
<div class="bn-top">
    <div class="container_img_bread no-img">
        <p><img class="img-responsive" src="images/bn-top.jpg" alt="" /></p>
    </div>
</div>

<div style="margin-top: 20px;"></div>

<section id="wrapper" class="active_grid">
    <div class="container">
        <div id="content-wrapper">
            <section id="main">
                <header class="page-header">
                    <h1>
                        Log in to your account
                    </h1>
                </header>
                <div class="space-50"></div>
                <section id="content" class="page-content card card-block">
                    <section class="login-form">
                        <form id="login-form" action="" method="post">
                            <section>
                                <input type="hidden" name="back" value="">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label required">
                                        New password
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group js-parent-focus">
                                            <input
                                            class="form-control js-child-focus js-visible-password"
                                            name="password_confirm"
                                            type="password"
                                            value=""
                                            required>
                                            <span class="input-group-btn">
                                                <button
                                                    class="btn"
                                                    type="button"
                                                    data-action="show-password"
                                                    data-text-show="Show"
                                                    data-text-hide="Hide"
                                                    >
                                                    Show
                                                </button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-3 form-control-comment">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label required">
                                        Confirm Password
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group js-parent-focus">
                                            <input
                                            class="form-control js-child-focus js-visible-password"
                                            name="password_confirm"
                                            type="password"
                                            value=""
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-3 form-control-comment">
                                </div>
                            </div>
                        </section>
                        <div class="space-10"></div>
                        <footer class="form-footer text-xs-center clearfix">
                            <input type="hidden" name="submitLogin" value="1">
                            <button class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
                                Reset
                            </button>
                        </footer>
                    </form>
                </section>
                <hr/>
            </section>
            <footer class="page-footer">
            </footer>
        </section>
    </div>
</div>
</section>

<?php include 'include/footer.inc.html'; ?>