<?php
  if(! $this->session->userdata('username'))
  {
    redirect(base_url('AdminController/index'));
  }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="<?php echo base_url('../bootstrap/favicon.ico')?>" type="image/x-icon">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="<?php echo base_url('../bootstrap/plugins/bootstrap/css/bootstrap.css')?>" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="<?php echo base_url('../bootstrap/plugins/node-waves/waves.css')?>" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="<?php echo base_url('../bootstrap/plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="<?php echo base_url('../bootstrap/plugins/morrisjs/morris.css')?>" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="<?php echo base_url('../bootstrap/css/style.css')?>" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="<?php echo base_url('../bootstrap/css/themes/all-themes.css')?>" rel="stylesheet" />

    <link href="<?php echo base_url('../bootstrap/plugins/bootstrap-select/css/bootstrap-select.css')?>" rel="stylesheet" />

    <link href="<?php echo base_url('../bootstrap/plugins/animate-css/animate.css')?>" rel="stylesheet" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">   
</head>
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">E-Commerce</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo base_url('../bootstrap/images/user.png')?>" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                <?php foreach($users as $u):?>
                    <?php if($this->session->userdata('username') == $u['username']): ?>
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $u['name'];?></div>
                    <div class="email"><?php echo $u['status'];?></div>
                        <?php endif;?>
                    <?php endforeach;?>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="<?php echo base_url('AdminController/logout')?>"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="<?php echo base_url('AdminController/home')?>">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Products</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Products</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="<?php echo base_url('ProductController/product')?>">Add product</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('ProductController/list_of_products')?>">List of Products</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>    
                    </li>
                    <li>
                        <a href="pages/helper-classes.html">
                            <i class="material-icons">layers</i>
                            <span>Add Category</span>
                        </a>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2016 - 2017 <a href="javascript:void(0);">E-Commerce</a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.5
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
    <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Add Product
                                <?php if($this->session->flashdata('message')){ ?>
                                    <script>toastr.success("<?php echo $this->session->flashdata('message'); ?>");</script></p>

                                <?php }else if($this->session->flashdata('error')): ?>
                                    <script>toastr.error("<?php echo $this->session->flashdata('error'); ?>");</script></p>
                                <?php endif; ?>
                            </h2>
                        </div>
                        <div class="body">
                            <form method="post" action="<?php echo base_url('ProductController/add_product')?>">
                                <input type="file" name="logo">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Product Name" name="product_name">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Product Description" name="product_description">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="Product Quantity" name="product_quantity">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                            <select class="form-control show-tick" name="product_category">
                                                <option value="">-- Select Category --</option>
                                                <?php foreach($categories as $c):?>
                                                    <option value="<?php echo $c['category_id'];?>"><?php echo $c['category_name']; ?></option>
                                                <?php endforeach; ?>    
                                                </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="Product Price" name="product_price">
                                        </div>
                                    </div>
                                </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn bg-orange waves-effect" id="btnSumbit">
                                            <i class="material-icons">save</i>
                                        </button>
                                    </div>                    
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- <?php foreach($products as $p): ?>
        <img src="<?php echo base_url('../upload/'. $p['image']);?>">
    <?php endforeach; ?> -->
    <!-- Jquery Core Js -->
    <script src="<?php echo base_url('../bootstrap/plugins/jquery/jquery.min.js')?>"></script>

    <!-- Bootstrap Core Js -->
    <script src="<?php echo base_url('../bootstrap/plugins/bootstrap/js/bootstrap.js')?>"></script>

    <!-- Select Plugin Js -->
    <script src="<?php echo base_url('../bootstrap/plugins/bootstrap-select/js/bootstrap-select.js')?>"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="<?php echo base_url('../bootstrap/plugins/jquery-slimscroll/jquery.slimscroll.js')?>"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="<?php echo base_url('../bootstrap/plugins/node-waves/waves.js')?>"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="<?php echo base_url('../bootstrap/plugins/jquery-countto/jquery.countTo.js')?>"></script>

    <!-- Morris Plugin Js -->
    <script src="<?php echo base_url('../bootstrap/plugins/raphael/raphael.min.js')?>"></script>
    <script src="<?php echo base_url('../bootstrap/plugins/morrisjs/morris.js')?>"></script>

    <!-- ChartJs -->
    <script src="<?php echo base_url('../bootstrap/')?>plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="<?php echo base_url('../bootstrap/plugins/flot-charts/jquery.flot.js')?>"></script>
    <script src="<?php echo base_url('../bootstrap/plugins/flot-charts/jquery.flot.resize.js')?>"></script>
    <script src="<?php echo base_url('../bootstrap/plugins/flot-charts/jquery.flot.pie.js')?>"></script>
    <script src="<?php echo base_url('../bootstrap/plugins/flot-charts/jquery.flot.categories.js')?>"></script>
    <script src="<?php echo base_url('../bootstrap/plugins/flot-charts/jquery.flot.time.js')?>"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="<?php echo base_url('../bootstrap/plugins/jquery-sparkline/jquery.sparkline.js')?>"></script>

    <!-- Custom Js -->
    <script src="<?php echo base_url('../bootstrap/js/admin.js')?>"></script>
    <script src="<?php echo base_url('../bootstrap/js/pages/index.js')?>"></script>

    <!-- Demo Js -->
    <script src="<?php echo base_url('../bootstrap/js/demo.js')?>"></script>
</body>
</html>
