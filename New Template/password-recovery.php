<?php include 'include/header.inc.html'; ?>
<title>Password recovery | PhantFashion</title>
</head>
<body id="password" class="lang-en country-us currency-usd layout-full-width page-password tax-display-disabled page-customer-account fullwidth">

<?php include 'include/navigation.inc.html'; ?>

<div class="bn-top">
    <div class="container_img_bread no-img">
        <p><img class="img-responsive" src="images/bn-top.jpg" alt="" /></p>
    </div>
</div>
<section id="wrapper" class="active_grid">
    <div class="container">
        <div id="content-wrapper">
            <section id="main">
                <header class="page-header">
                    <h1>
                        Forgot your password?
                    </h1>
                </header>
                <section id="content" class="page-content card card-block">
                    <form action="http://demo.fieldthemes.com/ps_modo/home1/en/password-recovery" class="forgotten-password" method="post">
                        <ul class="ps-alert-error"></ul>
                        <header>
                            <p class="send-renew-password-link">Please enter the email address you used to register. You will receive a temporary link to reset your password.</p>
                        </header>
                        <section class="form-fields">
                            <div class="form-group center-email-fields">
                                <label class="col-md-3 form-control-label required">Email address</label>
                                <div class="col-md-5 email">
                                    <input type="email" name="email" id="email" value="" class="form-control" required>
                                </div>
                                <button class="form-control-submit btn btn-primary" name="submit" type="submit">
                                    Send reset link
                                </button>
                            </div>
                            <div class="forgot-password">
                                <a href="/login" rel="nofollow">
                                    Remembered password?
                                </a>
                            </div>
                        </section>
                    </form>
                </section>
            </section>
        </div>
    </div>
</section>
<?php include 'include/footer.inc.html'; ?>