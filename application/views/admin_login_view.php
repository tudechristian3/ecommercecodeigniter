<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo base_url('../assets/css/style.css')?>">
    <title>Document</title>
</head>
<body background="<?php echo base_url('../assets/images/bg.jpg')?>">
    <div class="card-profile">
        <img src="<?php echo base_url('../assets/images/logo.png')?>" alt="" >
        <div class="container-profile">
          <form action="<?php echo base_url('AdminController/login')?>" method="post">
              <input type="text" placeholder="Username" name="username"><br>
              <input type="password" placeholder="Password" name="password"><br>
              <button>Login</button>
          </form> 
        </div>
    </div>

</body>
</html>