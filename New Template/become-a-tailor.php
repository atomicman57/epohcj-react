<?php include 'include/header.inc.html'; ?>
<title>Become a Tailor | PhantFashion</title>
<style type="text/css">
span.multiselect-native-select {
    position: relative
}
span.multiselect-native-select select {
    border: 0!important;
    clip: rect(0 0 0 0)!important;
    height: 1px!important;
    margin: -1px -1px -1px -3px!important;
    overflow: hidden!important;
    padding: 0!important;
    position: absolute!important;
    width: 1px!important;
    left: 50%;
    top: 30px
}
.multiselect-container {
    position: absolute;
    list-style-type: none;
    margin: 0;
    padding: 0
}
.multiselect-container .input-group {
    margin: 5px
}
.multiselect-container>li {
    padding: 0
}
.multiselect-container>li>a.multiselect-all label {
    font-weight: 700
}
.multiselect-container>li.multiselect-group label {
    margin: 0;
    padding: 3px 20px 3px 20px;
    height: 100%;
    font-weight: 700
}
.multiselect-container>li.multiselect-group-clickable label {
    cursor: pointer
}
.multiselect-container>li>a {
    padding: 0
}
.multiselect-container>li>a>label {
    margin: 0;
    height: 100%;
    cursor: pointer;
    font-weight: 400;
    padding: 3px 0 3px 30px
}
.multiselect-container>li>a>label.radio, .multiselect-container>li>a>label.checkbox {
    margin: 0
}
.multiselect-container>li>a>label>input[type=checkbox] {
    margin-bottom: 5px
}
.btn-group>.btn-group:nth-child(2)>.multiselect.btn {
    border-top-left-radius: 4px;
    border-bottom-left-radius: 4px
}
.form-inline .multiselect-container label.checkbox, .form-inline .multiselect-container label.radio {
    padding: 3px 20px 3px 40px
}
.form-inline .multiselect-container li a label.checkbox input[type=checkbox], .form-inline .multiselect-container li a label.radio input[type=radio] {
    margin-left: -20px;
    margin-right: 0
}
</style>
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
                        Become a Tailor
                    </h1>
                </header>
                <div class="space-50"></div>
                <section id="content" class="page-content card card-block">
                    <section class="register-form">
                        <p>Tell us about your business</p>
                        <form action="" id="customer-form" class="js-customer-form" method="post">
                            <section>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label required">
                                        Business name
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
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label required">
                                        Country of business
                                    </label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-select">
                                            <option>--Select--</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option>Outside Nigeria</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 form-control-comment"></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label required">
                                        State
                                    </label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-select">
                                            <option value disabled selected>-- please choose --</option>
                                            <option>outside nigeria</option>
                                            <option>Abuja FCT</option>
                                            <option>Abia</option>
                                            <option>Adamawa</option>
                                            <option>Akwa Ibom</option>
                                            <option>Anambra</option>
                                            <option>Bauchi</option>
                                            <option>Bayelsa</option>
                                            <option>Benue</option>
                                            <option>Borno</option>
                                            <option>Cross River</option>
                                            <option>Delta</option>
                                            <option>Ebonyi</option>
                                            <option>Edo</option>
                                            <option>Ekiti</option>
                                            <option>Enugu</option>
                                            <option>Gombe</option>
                                            <option>Imo</option>
                                            <option>Jigawa</option>
                                            <option>Kaduna</option>
                                            <option>Kano</option>
                                            <option>Katsina</option>
                                            <option>Kebbi</option>
                                            <option>Kogi</option>
                                            <option>Kwara</option>
                                            <option>Lagos</option>
                                            <option>Nassarawa</option>
                                            <option>Niger</option>
                                            <option>Ogun</option>
                                            <option>Ondo</option>
                                            <option>Osun</option>
                                            <option>Oyo</option>
                                            <option>Plateau</option>
                                            <option>Rivers</option>
                                            <option>Sokoto</option>
                                            <option>Taraba</option>
                                            <option>Yobe</option>
                                            <option>Zamfara</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 form-control-comment"></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label required">
                                        L.G.A.
                                    </label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-select">
                                            <option value disabled selected>-- please choose --</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 form-control-comment"></div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label required">
                                        City/Town
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
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label required">
                                        Services
                                    </label>
                                    <div class="col-md-6">
                                        <select class="form-control form-control-select">
                                            <option value="">-- please choose --</option>
                                            <option value="Shirt (male or female)">Shirt (male or female)</option>
                                            <option value="Pant trousers (male or female)">Pant trousers (male or female)</option>
                                            <option value="Jeans (male or female)">Jeans (male or female)</option>
                                            <option value="Suites (male or female)">Suites (male or female)</option>
                                            <option value="Traditional wears">Traditional wears</option>
                                            <option value="Senator suites (male or female)">Senator suites (male or female)</option>
                                            <option value="Shoes (male or female)">Shoes (male or female)</option>
                                            <option value="Sandals (male or female)">Sandals (male or female)</option>
                                            <option value="Bags (male or female)">Bags (male or female)</option>
                                            <option value="Palms (male or female)">Palms (male or female)</option>
                                            <option value="Beats work">Beats work</option>
                                            <option value="Hart, cap">Hart, cap</option>
                                            <option value="Wedding gown">Wedding gown</option>
                                            <option value="T-shirts">T-shirts</option>
                                            <option value="Gown">Gown</option>
                                            <option value="Etc.">Etc.</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 form-control-comment"></div>
                                </div>
                            </section>
                            <footer class="form-footer clearfix">
                                <button class="btn btn-primary form-control-submit pull-xs-right" data-link-action="save-customer" type="submit">
                                    Join
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