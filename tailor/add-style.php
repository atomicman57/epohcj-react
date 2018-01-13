<?php include 'include/head.php'; ?>

	<title>Add style :: Tailor | Dashboard | PhantFashion</title>
	<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'include/header.php'; ?>

  <?php include 'include/navigation.php'; ?>  

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Add style
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">New style</h3>
            </div>
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Style name">
                </div>
                <div class="form-group">
                  <label for="amount">Amount</label>
                  <input type="text" class="form-control" id="amount" placeholder="Amount for sewing">
                  <p class="help-block">Amount only. No sign (₦), comma, nor fullstop.</p>
                </div>
                <div class="form-group">
                  <label for="amount">Description</label>
                  <textarea class="form-control" id="amount" placeholder="Describe your new style"></textarea>
                  <p class="help-block">For new line, hit "Enter"</p>
                </div>
                <div class="form-group">
                  	<label for="image">Upload style</label>
                	<input
	                    data-clearable="true"
					    required="required"
					    type="hidden"
					    name="image"
					    value=""
					    role="uploadcare-uploader"
					    data-image-shrink="800x600 100%"
					    data-crop="750x500 minimum"
					    data-multiple="false" />
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select name="gender" class="form-control">
                  	<option value="">--Please select--</option>
                  	<option value="male">Male</option>
                  	<option value="female">Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="gender">Category</label> <!-- Populate the category the tailor selected to choose one -->
                  <select name="gender" class="form-control">
                  	<option value="">--Please select--</option>
                  	<option value="male">Male Shirts</option>
                  	<option value="female">Male Suits</option>
                  </select>
                </div>
                <label for="amount">Customization</label>
                <div class="help-block">
                	- Tick all options the user can select<br>
                	- Skip this section if style doesn't require customization
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading_collar_type">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_collar_type" aria-expanded="true" aria-controls="collapse_collar_type">
				          Collar type
				        </a>
				      </h4>
				    </div>
				    <div id="collapse_collar_type" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading_collar_type">
				      <div class="panel-body">
				        <div class="col-xs-3 col-sm-2 nopad text-center">
						    <label class="image-checkbox">
						      <img class="img-responsive" src="https://dummyimage.com/600x400/000/fff" title="Normal collar type" />
						      <input type="checkbox" name="image[]" value="" />
						      <i class="fa fa-check hidden"></i>
						    </label>
						  </div>
						  <div class="col-xs-3 col-sm-2 nopad text-center">
						    <label class="image-checkbox">
						      <img class="img-responsive" src="https://dummyimage.com/600x400/000/fff" title="Abnormal collar type" />
						      <input type="checkbox" name="image[]" value="" />
						      <i class="fa fa-check hidden"></i>
						    </label>
						  </div>
						  <div class="col-xs-3 col-sm-2 nopad text-center">
						    <label class="image-checkbox">
						      <img class="img-responsive" src="https://dummyimage.com/600x400/000/fff" title="Abnormal collar type" />
						      <input type="checkbox" name="image[]" value="" />
						      <i class="fa fa-check hidden"></i>
						    </label>
						  </div>
						  <div class="col-xs-3 col-sm-2 nopad text-center">
						    <label class="image-checkbox">
						      <img class="img-responsive" src="https://dummyimage.com/600x400/000/fff" title="Abnormal collar type" />
						      <input type="checkbox" name="image[]" value="" />
						      <i class="fa fa-check hidden"></i>
						    </label>
						  </div>
						  <div class="col-xs-3 col-sm-2 nopad text-center">
						    <label class="image-checkbox">
						      <img class="img-responsive" src="https://dummyimage.com/600x400/000/fff" title="Abnormal collar type" />
						      <input type="checkbox" name="image[]" value="" />
						      <i class="fa fa-check hidden"></i>
						    </label>
						  </div>
						  <div class="col-xs-12">
						  	<a href="#">Add new</a>
						  </div>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading_cuff_button">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_cuff_button" aria-expanded="false" aria-controls="collapse_cuff_button">
				          Cuff button
				        </a>
				      </h4>
				    </div>
				    <div id="collapse_cuff_button" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_cuff_button">
				      <div class="panel-body">
				        Anim p
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading_pocket">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_pocket" aria-expanded="false" aria-controls="collapse_pocket">
				          Pocket
				        </a>
				      </h4>
				    </div>
				    <div id="collapse_pocket" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_pocket">
				      <div class="panel-body">
				        Anim pa
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="heading_buttons_color">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_buttons_color" aria-expanded="false" aria-controls="collapse_buttons_color">
				          Buttons color
				        </a>
				      </h4>
				    </div>
				    <div id="collapse_buttons_color" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading_buttons_color">
				      <div class="panel-body">
				        Anim pa
				      </div>
				    </div>
				  </div>
				</div>
                <div class="form-group">
                    <input type="checkbox"> I agree to the <a href="#">Terms and Conditions</a>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
      	</div>
      	<div class="col-md-4">
      		<div class="box box-default">
			  <div class="box-header with-border">
			    <h3 class="box-title">How to use</h3>

			    <div class="box-tools pull-right">
			      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
			      </button>
			    </div>
			  </div>
			  <div class="box-body">
		        <ul class="chart-legend clearfix">
		          <li><i class="fa fa-circle-o text-red"></i> Chrome</li>
		          <li><i class="fa fa-circle-o text-green"></i> IE</li>
		          <li><i class="fa fa-circle-o text-yellow"></i> FireFox</li>
		          <li><i class="fa fa-circle-o text-aqua"></i> Safari</li>
		          <li><i class="fa fa-circle-o text-light-blue"></i> Opera</li>
		          <li><i class="fa fa-circle-o text-gray"></i> Navigator</li>
		        </ul>
			  </div>
			</div>
      	</div>
      </div>
    </section>
  </div>
  
<?php include 'include/footer.php'; ?>
<script type="text/javascript">
	$(".image-checkbox").each(function () {
	  if ($(this).find('input[type="checkbox"]').first().attr("checked")) {
	    $(this).addClass('image-checkbox-checked');
	  }
	  else {
	    $(this).removeClass('image-checkbox-checked');
	  }
	});
	$(".image-checkbox").on("click", function (e) {
	  $(this).toggleClass('image-checkbox-checked');
	  var $checkbox = $(this).find('input[type="checkbox"]');
	  $checkbox.prop("checked",!$checkbox.prop("checked"))

	  e.preventDefault();
	});
</script>
<script>
    UPLOADCARE_LOCALE = "en";
    UPLOADCARE_LIVE = "false";
    UPLOADCARE_PUBLIC_KEY = '055117b699742b6552b6';
    UPLOADCARE_TABS = "file url";
</script>
<script src="https://ucarecdn.com/widget/2.8.2/uploadcare/uploadcare.full.min.js"></script>
</body>
</html>
