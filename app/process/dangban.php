<?php
    session_start();
   $name = $_POST['name'];
   $details = $_POST['details'];
   $amount = $_POST['amount'];
   $price = $_POST['price'];
   $address = $_POST['address'];
   $phone = $_POST['phone'];
   $image = basename($_FILES["imageupload"]["name"]);
   $target_dir = "../uploads/";
   $target_file = $target_dir.$image;
    if(move_uploaded_file($_FILES["imageupload"]["tmp_name"], $target_file)){
        echo 'được';
    }else{
        echo 'đéo thành công';
    }
    require '../../database/config.php';
    $iduser = $_SESSION['user_login'];
    $addproducts = "INSERT INTO sanpham(tensanpham,soluong,giaban, mota, anhsanpham, sodienthoailienhe, diachi, id_nguoidung) 
                                VALUES('$name', '$amount', '$price', '$details', '$image', '$phone', '$address', '$iduser')";
    $result = mysqli_query($conn,$addproducts);
    // $result = 1;
    if($result > 0){
        header('location: ../frontend/sellproducts.php?notification=Đăng bán thành công');

    }
    
   


 
?>