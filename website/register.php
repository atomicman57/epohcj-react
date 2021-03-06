<?php include 'include/header.inc.html'; ?>
<title>Register | PhantFashion</title>
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
                        Create an account
                    </h1>
                </header>
                <div class="space-50"></div>
                <section id="content" class="page-content card card-block">
                    <section class="register-form">
                        <p>Already have an account? <a href="login.html">Log in instead!</a></p>
                        <form action="" id="customer-form" class="js-customer-form" method="post">
                            <section>
                                <div class="form-group row ">
                                    <label class="col-md-3 form-control-label">
                                        Social title
                                    </label>
                                    <div class="col-md-6 form-control-valign">
                                        <label class="radio-inline">
                                            <span class="custom-radio">
                                                <input
                                                name="id_gender"
                                                type="radio"
                                                value="1"
                                                >
                                                <span></span>
                                            </span>
                                            Mr.
                                        </label>
                                        <label class="radio-inline">
                                            <span class="custom-radio">
                                                <input
                                                name="id_gender"
                                                type="radio"
                                                value="2"
                                                >
                                                <span></span>
                                            </span>
                                            Mrs.
                                        </label>
                                    </div>
                                    <div class="col-md-3 form-control-comment"></div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                        First name
                                    </label>
                                    <div class="col-md-6">
                                        <input
                                        class="form-control"
                                        name="firstname"
                                        type="text"
                                        value=""
                                        required
                                        >
                                    </div>
                                    <div class="col-md-3 form-control-comment"></div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                        Last name
                                    </label>
                                    <div class="col-md-6">
                                        <input
                                        class="form-control"
                                        name="lastname"
                                        type="text"
                                        value=""
                                        required
                                        >
                                    </div>
                                    <div class="col-md-3 form-control-comment"></div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 form-control-label required">
                                        Email
                                    </label>
                                    <div class="col-md-6">
                                        <input
                                        class="form-control"
                                        name="email"
                                        type="email"
                                        value=""
                                        required
                                        >
                                    </div>
                                    <div class="col-md-3 form-control-comment"></div>
                                </div>
                                <div class="form-group row ">
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
                                            required
                                            >
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
                                <div class="col-md-3 form-control-comment"></div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label">
                                    Birthdate
                                </label>
                                <div class="col-md-6">
                                    <input
                                    class="form-control"
                                    name="birthday"
                                    type="text"
                                    value=""
                                    placeholder="MM/DD/YYYY"
                                    >
                                    <span class="form-control-comment">
                                        (E.g.: 05/31/1970)
                                    </span>
                                </div>
                                <div class="col-md-3 form-control-comment">
                                    Optional
                                </div>
                            </div>
                            <div class="form-group row ">
                                <label class="col-md-3 form-control-label"></label>
                                <div class="col-md-6">
                                    <span class="custom-checkbox">
                                        <input name="optin" type="checkbox" value="1">
                                        <span><i class="material-icons checkbox-checked">&#xE5CA;</i></span>
                                        <label>Receive offers from our partners</label >
                                    </span>
                                </div>
                                <div class="col-md-3 form-control-comment"></div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"></label>
                                <div class="col-md-6">
                                    <span class="custom-checkbox">
                                        <input name="newsletter" type="checkbox" value="1">
                                        <span><i class="material-icons checkbox-checked">&#xE5CA;</i></span>
                                        <label>Sign up for our newsletter<br><em>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</em></label >
                                    </span>
                                </div>
                                <div class="col-md-3 form-control-comment"></div>
                            </div>
                        </section>
                        <footer class="form-footer clearfix">
                            <input type="hidden" name="submitCreate" value="1">
                            <button class="btn btn-primary form-control-submit pull-xs-right" data-link-action="save-customer" type="submit">
                                Save
                            </button>
                        </footer>
                    </form>
                </section>
            </section>
            <footer class="page-footer"></footer>
        </section>
    </div>
</div>
</section>

<?php include 'include/footer.inc.html'; ?>