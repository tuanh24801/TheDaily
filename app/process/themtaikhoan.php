<?php 
    $password = $_POST['passinput'];
    $email = $_POST['emailinput'];
    $username = $_POST['nameinput'];
    require '../../database/config.php';
    
    $pass_hash = password_hash($password,PASSWORD_DEFAULT);
    $addacc = "INSERT INTO taikhoan(hoten,email,matkhau) VALUES('$username', '$email', '$pass_hash')";
    
    $result = mysqli_query($conn,$addacc);
    if($result > 0){
            echo 'Đăng kí thành công';
    }

        

        

        
?>