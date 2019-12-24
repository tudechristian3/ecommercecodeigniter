

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
                <a href="<?php echo base_url('ProductController/landing_page')?>">Home</a>
                <a class="active" href="">Men's</a>
                <a href="<?php echo base_url('ProductController/women_page')?>">Women's</a>
                <a href="<?php echo base_url('ProductController/shoes_page')?>">Shoes</a>
                <div class="topnav-right">
                  <a href="" class="badge1" data-badge="0"><img src="<?php echo base_url('../assets/images/shopping-cart.png')?>" alt="" ></a>
                  <a href="profile.html">Login</a>
                </div>
              </div>
            </div>
        </div>
    </nav>

    <div class="wrap">

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
    </div>
</body>

</html>