<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/style.css')?>">
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
    <title>Document</title>
</head>
<body background="<?php echo base_url('../assets/images/bg.jpg')?>">
    <div class="card-profile">
        <img src="<?php echo base_url('../assets/images/logo.png')?>" alt="" ><br/>
                                <?php if($this->session->flashdata('message')){ ?>
                                    <script>toastr.success("<?php echo $this->session->flashdata('message'); ?>");</script></p>

                                <?php }else if($this->session->flashdata('error')): ?>
                                    <div id="notif"><div class="alert alert-danger">
                                     <strong>Sorry!</strong> We can't find this account in our database.
                                    </div>
                                    </div>
                                <?php endif; ?>
        <div class="container-profile">
          <form action="<?php echo base_url('AdminController/login')?>" method="post">
              <input type="text" placeholder="Username" name="username"><br>
              <input type="password" placeholder="Password" name="password"><br>
              <button>Login</button>
          </form> 
        </div>
    </div>
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
    <script>
                                        setInterval(() => {
		
		
		                                    $('#notif').load(location.href + " #notif");	
	
	                                    }, 3000);
                                    </script>  
</body>
</html>