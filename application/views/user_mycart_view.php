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
                  <a href="<?php echo base_url('UserController/mycart')?>" class="badge1" data-badge="<?php echo $carts; ?>" id="notif"><img src="<?php echo base_url('../assets/images/shopping-cart.png')?>" alt="" ></a>
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
    <table style="width:95%">
        <tr>
            <td>Product ID</td>
            <td>Product Name</td>
            <td>Product Quantity</td>
            <td>Product Price</td>
            <td>Action</td>
        </tr>
            <?php foreach($cart as $c): ?>
            <?php foreach($users as $u): ?>
            <?php foreach($products as $p): ?>

                <?php if($c['user_id'] == $u['user_id']): ?>
                <?php if($u['username'] == $this->session->userdata('username')):?>
                <?php if($c['product_id'] == $p['product_id']): ?>
        <tr>
            <td><?php echo $c['cart_id']; ?></td>
            <td><?php echo $p['product_name']; ?></td>
            <td><?php echo $c['quantity']; ?></td>
            <td><?php echo $c['product_price']; ?></td>
            <td><a href="">Remove</a></td>
        </tr>
                <?php endif; ?>
                <?php endif; ?>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php endforeach; ?>
            <?php endforeach; ?>
    </table>


    
  
</body>
</html>    

   
    