<?php include 'include/header.inc.html'; ?>
<title>Login | PhantFashion</title>
</head>
<body>
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
                                        Email
                                    </label>
                                    <div class="col-md-6">
                                        <input
                                        class="form-control"
                                        name="email"
                                        type="email"
                                        value=""
                                        required>
                                    </div>
                                    <div class="col-md-3 form-control-comment">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label required">
                                        Password
                                    </label>
                                    <div class="col-md-6">
                                        <div class="input-group js-parent-focus">
                                            <input
                                            class="form-control js-child-focus js-visible-password"
                                            name="password"
                                            type="password"
                                            value=""
                                            pattern=".{5,}"
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
                            <div class="forgot-password">
                                <a href="password-recovery.html" rel="nofollow">
                                    Forgot your password?
                                </a>
                            </div>
                        </section>
                        <div class="space-10"></div>
                        <footer class="form-footer text-xs-center clearfix">
                            <input type="hidden" name="submitLogin" value="1">
                            <button class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
                                Sign in
                            </button>
                        </footer>
                    </form>
                </section>
                <hr/>
                <div class="no-account">
                    <a href="register.php" data-link-action="display-register-form">
                        No account? Create one here
                    </a>
                </div>
            </section>
            <footer class="page-footer">
            </footer>
        </section>
    </div>
</div>
</section>

<?php include 'include/footer.inc.html'; ?>