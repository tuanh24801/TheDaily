<?php
    session_start();
   $name = $_POST['name'];
   $details = $_POST['details'];
   $amount = $_POST['amount'];
   $price = $_POST['price'];

   $image = basename($_FILES["imageupload"]["name"]);
   $target_dir = "../uploads/";
   $target_file = $target_dir.$image;
   move_uploaded_file($_FILES["imageupload"]["tmp_name"], $target_file);
    require '../../database/config.php';
    $iduser = $_SESSION['user_login'];
    
    $addproducts = "INSERT INTO sanpham(tensanpham,soluong,giaban, mota, anhsanpham, id_taikhoan) 
                                VALUES('$name', '$amount', '$price', '$details', '$image', '$iduser')";

    $result = mysqli_query($conn,$addproducts);
    if($result > 0){
        header('location: ../frontend/sellproducts.php?notification=Đăng bán thành công');

    }
    
   


 
?>