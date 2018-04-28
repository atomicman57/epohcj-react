<?php include 'include/head.php'; ?>
  <title>Services - Dashboard | PhantFashion</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'include/header.php'; ?>

  <?php include 'include/navigation.php'; ?>  

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Services - <a href="/services-add-new.php">Add new <i class="fa fa-plus"></i></a>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Services</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Services</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <tr>
                    <td>Shirt (male or female)</td>
                    <td>
                      <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Jeans (male or female)</td>
                    <td>
                      <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                  </tr>
                  <tr>
                    <td>Traditional wears</td>
                    <td>
                      <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                  </tr>
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