<?php
        $email = $_POST['email'];
        $password = $_POST['password'];
     
        require '../sendEmail/sendemail.php';
        require '../../database/config.php';
        

        if($email == ''){
                echo 'vui lòng điền thông tin email';
                die;
        }
        if($password == ''){
                echo 'vui lòng điền mật khẩu';
                die;
        }
        
        $sql = "SELECT * from nguoidung";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
                if($email == $row['email'] && $password == $row['matkhau']){
                        echo 'Đăng nhập thành công';
                        session_start();
                        $_SESSION['user_login'] = $row['id_nguoidung'];
                        die;
                }
        }
        echo 'Đăng nhập thất bại';

        

        

        
        
    
?>