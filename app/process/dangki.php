<?php
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
     
        require '../sendEmail/sendemail.php';
        require '../../database/config.php';
        
        if($username == ''){
                echo 'vui lòng điền thông tin tên của bạn';
                die;
        }
        if($email == ''){
                echo 'vui lòng điền thông tin email của bạn';
                die;
        }
        if($password == ''){
                echo 'vui lòng nhập mật khẩu lớn hơn 8 kí tự';
                die;
        }
        if(strlen($password) <= 8){
                echo 'vui lòng nhập mật khẩu lớn hơn 8 kí tự';
                die;
        }
        
        $sql = "SELECT email from nguoidung";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
                if($email == $row['email']){
                        echo 'email đã tồn tại';
                        die;
                }
        }
        $addacc = "INSERT INTO nguoidung(hoten,email,matkhau) VALUES('$username', '$email', '$password')";
        $result = mysqli_query($conn,$addacc);
        if($result > 0){
                echo 'Đăng kí thành công';
        }

        

        

        
        
    
?>