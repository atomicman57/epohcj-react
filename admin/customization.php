<?php include 'include/head.php'; ?>
  <title>Customization - Dashboard | PhantFashion</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'include/header.php'; ?>

  <?php include 'include/navigation.php'; ?>  

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Customization - <a href="/customization-add-new.php">Add new <i class="fa fa-plus"></i>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Customization</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Customization</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>&nbsp;</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Service</th>
                    <th>&nbsp;</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><img src="https://dummyimage.com/60x40/000/fff" class="img-responsive"></td>
                    <td>Tiny button</td>
                    <td>A very tiny button that is useless</td>
                    <td>Button</td>
                    <td>Shirts (male or female)</td>
                    <td>
                      <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <?php include 'include/footer.php'; ?>
</body>
</html>
