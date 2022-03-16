<!doctype html>
<html lang="en">
  <head>    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="shortcut icon" href="../../images/fav-icon.png">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
        crossorigin="anonymous"/>
    <title>TheDaily - Đồ cũ</title>
  </head>
  <body>
      <!-- navigation -->
    <nav>
        <div class="social-call">
            <div class="social">               
                <a href="#">TheDaily web bán đồ cũ đang có chương trình free ship 0đ</a>
            </div>
            <div class="phone">
            </div>
        </div>
        <!-- menu bar -->
        <div class="navigation">
            <a href="./homepage.php" class = "logo">
                <img src="../../images/logo.png" alt="">
            </a>
            <!-- menu icon -->
            <div class="toggle"></div>
            <!-- menu -->
            <ul class="menu mt-2">
                <li> 
                  <form action="searchproduct.php" class="search-product" method = "post">
                    <input type="text" class="" id="exampleFormControlInput1 valuesearch" placeholder="tìm kiếm sản phẩm" name = "valuesearch"
					            value = '<?php 
                        if(isset($valuesearch)){
                          echo $valuesearch;
                        }
                       ?>'>
                    <button type = "submit" class="btn-search" id="searchproducts"><i class="fas fa-search"></i></button>
                  </form>
                </li>
            </ul>
            <!-- right menu -->
            <div class="right-menu mb-3">
              <div class="dropdown drop-active">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                  <li><button class="dropdown-item" type="button"><a href="./sellproducts.php" class="a-item">Đăng bán</a></button></li>
                  <li><button class="dropdown-item" type="button"><a href="./personal.php" class="a-item">Cá nhân</a></button></li>
                  <li><button class="dropdown-item" type="button"><a href="../process/dangxuat.php" class="a-item" id="userlogout">Đăng xuất</a></button></li>
                </ul>
            </div>
              <div class="drop-none">
                <a href="./sellproducts.php" class = "user user-login"><i class="fal fa-cart-plus"></i> Đăng bán</a>
                <?php
                 include '../../database/config.php';
                 $id_taikhoan =  $_SESSION['user_login'];
                  $getname = "SELECT hoten FROM taikhoan WHERE id_taikhoan = '$id_taikhoan'";
                  $result = mysqli_query($conn,$getname);
                  $row = mysqli_fetch_assoc($result);
                ?>
                <a href="./personal.php" class = "user user-login"><i class="fas fa-user"></i> <?php echo $row['hoten']; ?></a>
                <a href="../process/dangxuat.php" class = "user user-login"><i class="fas fa-power-off" id="userlogout"></i> Đăng xuất</a>
              </div>
             
            </div>

        </div>
    </nav>
    <!-- login and sign up form -->
    <!-- full slider -->