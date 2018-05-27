<?php include 'include/head.php'; ?>

	<title>Customization | Dashboard | PhantFashion</title>
	<link rel="stylesheet" href="assets/css/custom.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'include/header.php'; ?>

  <?php include 'include/navigation.php'; ?>  

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Add new</a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add new</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-8">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add new</h3>
            </div>
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="gender">Service</label>
                  <select name="gender" class="form-control">
                  	<option value="">--Please select--</option>
                  	<option value="male">Male Shirts</option>
                  	<option value="female">Male Suits</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="gender">Category</label>
                  <select name="gender" class="form-control">
                  	<option value="">--Please select--</option>
                  	<option value="collar">Collar</option>
                  	<option value="button">Button</option>
                  </select>
                  <p class="help-block"><a href="#">Add new</a></p>
                </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="description" name="description">
                </div>
                <div class="form-group">
                  <label for="image">Add image</label>
                  <input type="file" class="form-control" id="image" name="image">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </div>
           </form>
          	</div>
      	</div>
      </div>
    </section>
  </div>
  
<?php include 'include/footer.php'; ?>
</body>
</html>
