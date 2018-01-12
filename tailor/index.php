<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tailor | Dashboard | PhantFashion</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/jquery-jvectormap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/skins.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'include/header.php'; ?>

  <?php include 'include/navigation.php'; ?>  

  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-male"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Styles</span>
              <span class="info-box-number">90</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-credit-card"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Sales</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-star-half-full"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Reviews</span>
              <span class="info-box-number">2,600</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-envelope-open"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Contacts</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
      </div>

      <div class="row">
        <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>
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
                    <th>Order ID</th>
                    <th>Item</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="#">OR9842</a></td>
                    <td>Vintage Fashion</td>
                    <td><span class="label label-success">Shipped</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR1848</a></td>
                    <td>Bohemian Fashion</td>
                    <td><span class="label label-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR7429</a></td>
                    <td>Chic Fashion</td>
                    <td><span class="label label-danger">Delivered</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR7429</a></td>
                    <td>Artsy Fashion</td>
                    <td><span class="label label-info">Processing</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR1848</a></td>
                    <td>Vintage Fashion</td>
                    <td><span class="label label-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR7429</a></td>
                    <td>Bohemian Fashion</td>
                    <td><span class="label label-danger">Delivered</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR9842</a></td>
                    <td>Chic Fashion</td>
                    <td><span class="label label-success">Shipped</span></td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="box-footer clearfix">
              <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Recently Added Styles</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body">
              <ul class="products-list product-list-in-box">
                <li class="item">
                  <div class="product-img">
                    <img src="assets/images/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Vintage Fashion
                      <span class="label label-info pull-right">₦18,000</span></a>
                    <span class="product-description">
                          One of the most adorable fashion styles, it definitely is a blast from the past.
                        </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="assets/images/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Bohemian Fashion
                      <span class="label label-info pull-right">₦7,000</span></a>
                    <span class="product-description">
                          A style which is similar to arty, bohemian style uses extravagant and wild patterns on exotic textures.
                        </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="assets/images/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Chic Fashion<span
                        class="label label-info pull-right">₦3,500</span></a>
                    <span class="product-description">
                          Chic is characterized by being trendy and fashionable.
                        </span>
                  </div>
                </li>
                <li class="item">
                  <div class="product-img">
                    <img src="assets/images/default-50x50.gif" alt="Product Image">
                  </div>
                  <div class="product-info">
                    <a href="javascript:void(0)" class="product-title">Artsy Fashion
                      <span class="label label-info pull-right">₦39,000</span></a>
                    <span class="product-description">
                          Arty as the names suggest, invokes the independent creativity of the person.
                        </span>
                  </div>
                </li>
              </ul>
            </div>
            <div class="box-footer text-center">
              <a href="javascript:void(0)" class="uppercase">View All Styles</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  
  <?php include 'include/footer.php'; ?>