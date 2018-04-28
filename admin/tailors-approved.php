<?php include 'include/head.php'; ?>
  <title>Approved Tailors - Dashboard | PhantFashion</title>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'include/header.php'; ?>

  <?php include 'include/navigation.php'; ?>  

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Approved Tailors
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Approved Tailors</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Approved Tailors</h3>
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
                    <th>Business name</th>
                    <th>Services</th>
                    <th>No. of styles</th>
                    <th>No. of orders</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="#" title="Link to tailor frontend page">Vintage Fashion <i class="fa fa-external-link"></i></a></td>
                    <td>Shirts (male or female), Traditional wears</td>
                    <td>25 - <a href="#">See styles</a></td>
                    <td>12 - <a href="#">See orders</a></td>
                    <td>
                      <button type="button" class="btn btn-info">View details</button>
                    </td>
                    <td>
                      <button type="button" class="btn btn-danger">Revoke</button>
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
