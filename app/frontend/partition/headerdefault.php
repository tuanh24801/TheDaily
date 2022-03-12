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
    <link rel="stylesheet" href="../style/index.css">
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
                <!-- <a href="#"><i class="fab fa-facebook-f btnsignup"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a> -->
                <a href="#">TheDaily web bán đồ cũ đang có chương trình free ship 0đ</a>
            </div>
            <div class="phone">
                <!-- <span></span> -->
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
                  <form action="searchproduct.php" class="search-product" method="post">
                    <input type="text" class="" id="exampleFormControlInput1" placeholder="tìm kiếm sản phẩm" name = "valuesearch"
                    value = '<?php 
                        if(isset($valuesearch)){
                          echo $valuesearch;
                        }
                       ?>'>
                    <button type = "submit" class="btn-search"><i class="fas fa-search"></i></button>
                  </form>
                </li>
            </ul>
            <!-- right menu -->
            <div class="right-menu mb-3 d-flex">
              <!-- <a href="javascript:void(0);" class = "search"><i class="fas fa-search"></i></a> -->
              <a href="javascript:void(0);" class = "user user-login btnloginactive sign-up-btn"><i class="fas fa-user"></i> Đăng kí</a>
              <a href="javascript:void(0);" class = "user user-login btnloginactive"><i class="fas fa-user"></i> Đăng nhập</a>
            
              <a href="javascript:void(0);" class = "user user-login btnloginnonactive"><i class="fas fa-user"></i></a>
            </div>

        </div>
    </nav>
    <!-- login and sign up form -->
    <div class="form">
      <!-- login -->
      <div class="login-form">
        <!-- cancel btn -->
        <a href="javascript:void(0);" class="form-cancel">
          <i class="fas fa-times"></i>
        </a>
        <strong>Đăng nhập</strong>
        <p id="note-if-login"></p>
        <!-- <form method="post" action = "../process/dangnhap.php"> -->
        <form>
            <input type="email" placeholder="Email đăng kí" name = "email" id="emaillogin" >
            <input type="password" placeholder="Mật khẩu" name = "password" id="passlogin">
            <!-- submit btn -->
            <!-- <input type = "submit" value="Sign in" class = "btn btnsignin"> -->

            <input value="Đăng nhập" class = "btn btnsignin" id="btnsignin">

            <!-- <a href="#" class="login btn btn-success">login</a> -->
        </form>
        <!-- forget and sign up btn -->
        <div class="form-btns">
          <a href="#" class="forget">Quên mật khẩu</a>
          <a href="javascript:void(0);" class="sign-up-btn">Đăng kí tài khoản</a>
        </div>
      </div>
      <!-- sign up -->
      <div class="sign-up-form">
        <!-- cancel btn -->
        <a href="javascript:void(0);" class="form-cancel">
          <i class="fas fa-times"></i>
        </a>
        
        <strong>Đăng kí</strong>
       
        <p id="note-if-signup"></p>
        <form>
            <input type="text" placeholder="Tên người dùng" name = "username" id="username">
            <input type="email" placeholder="Email đăng kí" name = "email" id="email" >
            <input type="password" placeholder="Mật khẩu" name = "password" id="password">
            <!-- submit btn -->
            <input value="Đăng kí" class = "btn btnsignup" id="btnsignup">
        </form>
        <!-- forget and sign up btn -->
        <div class="form-btns">
          <a href="javascript:void(0);" class="already-account">Bạn đã có tài khoản ?</a>
          <a href="javascript:void(0);" class="already-account sign-in-btn">Đăng nhập</a>

        </div>
      </div>
    </div>
    <!-- full slider -->