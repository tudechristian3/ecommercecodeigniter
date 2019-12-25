<?php
  if(! $this->session->userdata('username'))
  {
    redirect(base_url('AdminController/index'));
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/style.css')?>">
    <title>Document</title>
</head>
<body>
    
    <div class="wrap">
        <input type="text" placeholder="Search">
    </div>
    
    <nav>
        <div class="wrap">
            <div class="topnav">
                <a class="active" href="#home">Home</a>
                <a href="<?php echo base_url('ProductController/men_page')?>">Men's</a>
                <a href="<?php echo base_url('ProductController/women_page')?>">Women's</a>
                <a href="<?php echo base_url('ProductController/shoes_page')?>">Shoes</a>
                <div class="topnav-right">
                  <a href="" class="badge1" data-badge="<?php echo $carts; ?>" id="notif"><img src="<?php echo base_url('../assets/images/shopping-cart.png')?>" alt="" ></a>
                  <div class="dropdown">
                  <?php foreach($users as $u):?>
                    <?php if($this->session->userdata('username') == $u['username']): ?>
                    <button class="dropbtn"><?php echo $u['name']; ?></button>
                    <?php endif; ?>  
                    <?php endforeach; ?>  
                    <div class="dropdown-content">
                        <a href="#">Profile</a>
                        <a href="<?php echo base_url('UserController/logout')?>">Logout</a>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </nav>

    <div class="wrap">
        <h1>New Products</h1>
        <div class="flex-container">
          <?php foreach($products as $p):?>
            <div class="card">
                <div class="img">
                    <figure>
                        <img src="<?php echo base_url('../upload/'. $p['image']);?>" alt="" style="width:100%">
                    </figure>
                </div>
                <div class="container">
                        <h4><b><?php echo $p['product_name']; ?></b></h4>
                        <h5><b><?php echo $p['product_price']; ?></b></h5>
                        <a href="<?php echo base_url('CartController/add_to_cart')?>/<?php echo $p['product_id']; ?>" class="btnBlue">Add to Cart</a>
                        <button class="btnGreen">View</button>
                </div>
            </div>
          <?php endforeach; ?>
        </div> 
        <!-- End of New Product -->

            <h1>Men's Products</h1>
            <div class="flex-container">
                <?php foreach($products as $p):?>
                    <?php if($p['category_id'] == 1): ?>
                <div class="card">
                    <div class="img">
                        <figure>
                        <img src="<?php echo base_url('../upload/'. $p['image']);?>" alt="" style="width:100%">
                        </figure>
                    </div>
                    <div class="container">
                            <h4><b><?php echo $p['product_name']; ?></b></h4>
                            <h5><b><?php echo $p['product_price']; ?></b></h5>
                            <button class="btnBlue">Add to Cart</button>
                            <button class="btnGreen">View</button>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!--End of Mens Product-->

            <h1>Women's Products</h1>
            <div class="flex-container">
                <?php foreach($products as $p):?>
                    <?php if($p['category_id'] == 2): ?>
                <div class="card">
                    <div class="img">
                        <figure>
                        <img src="<?php echo base_url('../upload/'. $p['image']);?>" alt="" style="width:100%">
                        </figure>
                    </div>
                    <div class="container">
                            <h4><b><?php echo $p['product_name']; ?></b></h4>
                            <h5><b><?php echo $p['product_price']; ?></b></h5>
                            <button class="btnBlue">Add to Cart</button>
                            <button class="btnGreen">View</button>
                    </div>
                </div>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <!-- End of Womens Product-->


    </div>
            
    <script>
        setInterval(() => {
		
		
		$('#notif').load(location.href + " #notif");	
	
	}, 1000);
    </script>
</body>

</html>