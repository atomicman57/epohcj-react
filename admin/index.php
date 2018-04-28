<?php include 'include/head.php'; ?>
  <title>Dashboard | PhantFashion</title>
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

    <section class="content">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Users</h3>
              <p>(See all users)</p>
            </div>
            <div class="icon">
              <i class="fa fa-male"></i>
            </div>
            <a class="small-box-footer" href="#">
              Go to the users page
              <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>Tailors</h3>
              <p>(See all tailors)</p>
            </div>
            <div class="icon">
              <i class="fa fa-list-ul"></i>
            </div>
            <a class="small-box-footer" href="#">
              Go to the tailors page
              <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Orders</h3>
              <p>(See all orders)</p>
            </div>
            <div class="icon">
              <i class="fa fa-credit-card"></i>
            </div>
            <a class="small-box-footer" href="#">
              Go to the orders page
              <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Styles</h3>
              <p>(See all styles)</p>
            </div>
            <div class="icon">
              <i class="fa fa-female"></i>
            </div>
            <a class="small-box-footer" href="#">
              Go to the styles page
              <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
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
                    <th>Price</th>
                    <th>Tailor</th>
                    <th>Status</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="#">OR9842</a></td>
                    <td>Vintage Fashion</td>
                    <td>₦26,000</td>
                    <td><a href="#">Sample tailor</a></td>
                    <td><span class="label label-success">Shipped</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR1848</a></td>
                    <td>Bohemian Fashion</td>
                    <td>₦26,000</td>
                    <td><a href="#">Sample tailor</a></td>
                    <td><span class="label label-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR7429</a></td>
                    <td>Chic Fashion</td>
                    <td>₦26,000</td>
                    <td><a href="#">Sample tailor</a></td>
                    <td><span class="label label-danger">Delivered</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR7429</a></td>
                    <td>Artsy Fashion</td>
                    <td>₦26,000</td>
                    <td><a href="#">Sample tailor</a></td>
                    <td><span class="label label-info">Processing</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR1848</a></td>
                    <td>Vintage Fashion</td>
                    <td>₦26,000</td>
                    <td><a href="#">Sample tailor</a></td>
                    <td><span class="label label-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR7429</a></td>
                    <td>Bohemian Fashion</td>
                    <td>₦26,000</td>
                    <td><a href="#">Sample tailor</a></td>
                    <td><span class="label label-danger">Delivered</span></td>
                  </tr>
                  <tr>
                    <td><a href="#">OR9842</a></td>
                    <td>Chic Fashion</td>
                    <td>₦26,000</td>
                    <td><a href="#">Sample tailor</a></td>
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
</body>
</html>
