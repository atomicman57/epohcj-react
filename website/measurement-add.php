<?php include 'include/header.inc.html'; ?>
<title>Measurement | PhantFashion</title>
</head>

<body>
<?php include 'include/navigation.php'; ?>
<div class="bn-top">
    <div class="container_img_bread no-img">
        <p><img class="img-responsive" src="images/bn-top.jpg" alt="" /></p>
    </div>
</div>
<h1>&nbsp;</h1>
<section id="wrapper" class="active_grid">
    <div class="container">
        <div id="content-wrapper">
            <section id="main">
                <header class="page-header">
                    <h1>
                        Add/Edit Measurement
                    </h1>
                </header>
                <section id="content" class="page-content">
                    <form action="" class="js-customer-form" method="post">
                        <h6><a href="#">Measurement guide</a></h4>
                        <p>Accurate measurement is very important to help us serve you well. Get someone to help you do this. Unit of measurement is "Inches". We take full body part measurements so you can comfortably get different styles and designs without getting measured again. Next time, measurement will be taken using our smart measurement app which is coming soon.</p>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Social title
                            </label>
                            <div class="col-md-6 form-control-valign">
                                <label class="radio-inline">
                                    <span class="custom-radio">
                                        <input name="id_gender" type="radio" value="1">
                                        <span></span>
                                    </span>
                                    Male
                                </label>
                                <label class="radio-inline">
                                    <span class="custom-radio">
                                        <input name="id_gender" type="radio" value="2">
                                        <span></span>
                                    </span>
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Name</label>
                            <div class="col-md-6">
                                <input class="form-control" name="name" type="text" placeholder="Whose measurement is this?" value="" required>
                            </div>
                        </div>
                        <!--- Beginning of male -->
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Chest</label>
                            <div class="col-md-6">
                                <input class="form-control" name="chest" type="number" placeholder="Testing" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Waist</label>
                            <div class="col-md-6">
                                <input class="form-control" name="waist" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Hip</label>
                            <div class="col-md-6">
                                <input class="form-control" name="hip" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Shoulder</label>
                            <div class="col-md-6">
                                <input class="form-control" name="shoulder" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Short sleeve</label>
                            <div class="col-md-6">
                                <input class="form-control" name="short_sleeve" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Long sleve</label>
                            <div class="col-md-6">
                                <input class="form-control" name="long_sleve" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Shirt/Suit Length</label>
                            <div class="col-md-6">
                                <input class="form-control" name="shirt_length" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Trouser Length</label>
                            <div class="col-md-6">
                                <input class="form-control" name="trouser_length" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Neck</label>
                            <div class="col-md-6">
                                <input class="form-control" name="neck" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Stomach</label>
                            <div class="col-md-6">
                                <input class="form-control" name="stomach" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Crotch</label>
                            <div class="col-md-6">
                                <input class="form-control" name="crotch" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Thigh</label>
                            <div class="col-md-6">
                                <input class="form-control" name="thigh" type="number" value="" required>
                            </div>
                        </div>
                        <!-- End of male -->
                        <!-- Beginning of female -->
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Upper bust</label>
                            <div class="col-md-6">
                                <input class="form-control" name="upper_bust" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Lower bust</label>
                            <div class="col-md-6">
                                <input class="form-control" name="lower_bust" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Waist</label>
                            <div class="col-md-6">
                                <input class="form-control" name="waist" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Shoulder</label>
                            <div class="col-md-6">
                                <input class="form-control" name="shoulder" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Short sleeve</label>
                            <div class="col-md-6">
                                <input class="form-control" name="short_sleeve" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Long sleeve</label>
                            <div class="col-md-6">
                                <input class="form-control" name="long_sleeve" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Neck</label>
                            <div class="col-md-6">
                                <input class="form-control" name="neck" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">Stomach</label>
                            <div class="col-md-6">
                                <input class="form-control" name="stomach" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Hip
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" name="hip" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Thigh
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" name="thigh" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Bottom width
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" name="bottom_width" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Crotch
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" name="crotch" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Gown Length
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" name="gown_length" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Full Length
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" name="full_length" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Suit Length
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" name="suit_length" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Blouse Length
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" name="blouse_length" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Trouser Length
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" name="trouser_length" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Skirt Length
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" name="skirt_length" type="number" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-3 form-control-label">
                                Knee Length
                            </label>
                            <div class="col-md-6">
                                <input class="form-control" name="knee_length" type="number" value="" required>
                            </div>
                        </div>
                        <!-- End of female -->
                        <footer class="form-footer clearfix">
                            <input type="hidden" name="submitCreate" value="1">
                            <button class="btn btn-primary form-control-submit pull-xs-right" data-link-action="save-customer" type="submit">
                                Save
                            </button>
                        </footer>
                    </form>
                </section>
            </section>
        </div>
    </div>
</section>

<?php include 'include/footer.inc.html'; ?>