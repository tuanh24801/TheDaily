<?php
        $email = $_POST['email'];
        $password = $_POST['password'];
     
        require '../../database/config.php';
        

        if($email == ''){
                echo 'Vui lòng điền thông tin email';
                die;
        }
        if(!preg_match('|^[A-Z0-9.]+@[A-Z0-9]+\.[A-Z]{2,4}$|i',$email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Định dạng mail không hợp lệ";
                die;
        }
        if($password == ''){
                echo 'Vui lòng điền mật khẩu';
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
        die;

        

        

        
        
    
?>