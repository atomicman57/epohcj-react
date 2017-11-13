<?php include 'include/header.inc.html'; ?>
<title>Profile | PhantFashion</title>
</head>

<body id="address" class="lang-en country-us currency-usd layout-full-width page-address tax-display-disabled page-customer-account fullwidth">
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
                            New address
                        </h1>
                    </header>
                    <section id="content" class="page-content">
                        <div class="address-form">
                            <div class="js-address-form">
                                <form
                                method="POST"
                                action="//demo.fieldthemes.com/ps_modo/home1/en/address?id_address=0"
                                data-id-address="0"
                                data-refresh-url="//demo.fieldthemes.com/ps_modo/home1/en/address?ajax=1&action=addressForm"
                                >
                                <section class="form-fields">
                                    <input type="hidden" name="id_address" value="">
                                    <input type="hidden" name="id_customer" value="">
                                    <input type="hidden" name="back" value="">
                                    <input type="hidden" name="token" value="54151b0dde74b458b90fd00c4c85a602">
                                    <div class="form-group row ">
                                        <label class="col-md-3 form-control-label">
                                            Alias
                                        </label>
                                        <div class="col-md-6">
                                            <input
                                            class="form-control"
                                            name="alias"
                                            type="text"
                                            value=""
                                            maxlength="32">
                                        </div>
                                        <div class="col-md-3 form-control-comment">
                                            Optional
                                        </div>
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
                                            value="etimbuk"
                                            maxlength="32"
                                            required>
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
                                            value="udoekong"
                                            maxlength="32"
                                            required>
                                        </div>
                                        <div class="col-md-3 form-control-comment"></div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-md-3 form-control-label">
                                            Company
                                        </label>
                                        <div class="col-md-6">
                                            <input
                                            class="form-control"
                                            name="company"
                                            type="text"
                                            value=""
                                            maxlength="255">
                                        </div>
                                        <div class="col-md-3 form-control-comment">
                                            Optional
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-md-3 form-control-label required">
                                            Address
                                        </label>
                                        <div class="col-md-6">
                                            <input
                                            class="form-control"
                                            name="address1"
                                            type="text"
                                            value=""
                                            maxlength="128"
                                            required>
                                        </div>
                                        <div class="col-md-3 form-control-comment"></div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-md-3 form-control-label">
                                            Address Complement
                                        </label>
                                        <div class="col-md-6">
                                            <input
                                            class="form-control"
                                            name="address2"
                                            type="text"
                                            value=""
                                            maxlength="128">
                                        </div>
                                        <div class="col-md-3 form-control-comment">
                                            Optional
                                        </div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-md-3 form-control-label required">
                                            City
                                        </label>
                                        <div class="col-md-6">
                                            <input
                                            class="form-control"
                                            name="city"
                                            type="text"
                                            value=""
                                            maxlength="64"
                                            required>
                                        </div>
                                        <div class="col-md-3 form-control-comment"></div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-md-3 form-control-label required">
                                            State
                                        </label>
                                        <div class="col-md-6">
                                            <select class="form-control form-control-select" name="id_state" required>
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
                                    <div class="form-group row ">
                                        <label class="col-md-3 form-control-label required">
                                            Zip/Postal Code
                                        </label>
                                        <div class="col-md-6">
                                            <input
                                            class="form-control"
                                            name="postcode"
                                            type="text"
                                            value=""
                                            maxlength="12"
                                            required>
                                        </div>
                                        <div class="col-md-3 form-control-comment"></div>
                                    </div>
                                    <div class="form-group row ">
                                        <label class="col-md-3 form-control-label required">
                                            Country
                                        </label>
                                        <div class="col-md-6">
                                            <select
                                            class="form-control form-control-select js-country"
                                            name="id_country"
                                            required>
                                            <option value disabled selected>-- please choose --</option>
                                            <option value="21"  selected >Nigeria</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 form-control-comment"></div>
                                </div>
                                <div class="form-group row ">
                                    <label class="col-md-3 form-control-label">
                                        Phone
                                    </label>
                                    <div class="col-md-6">
                                        <input
                                        class="form-control"
                                        name="phone"
                                        type="text"
                                        value=""
                                        maxlength="32">
                                    </div>
                                    <div class="col-md-3 form-control-comment">
                                        Optional
                                    </div>
                                </div>
                            </section>
                            <footer class="form-footer clearfix">
                                <input type="hidden" name="submitAddress" value="1">
                                <button class="btn btn-primary pull-xs-right" type="submit" class="form-control-submit">
                                    Save
                                </button>
                            </footer>
                        </form>
                    </div>
                </div>
            </section>
        </section>
    </div>
</div>
</section>
    


<?php include 'include/footer.inc.html'; ?>