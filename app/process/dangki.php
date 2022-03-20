<?php
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
     
        require '../../database/config.php';
        
        if($username == ''){
                echo 'vui lòng điền thông tin tên của bạn';
                die;
        }
        if($email == ''){
                echo 'vui lòng điền thông tin email của bạn';
                die;
        }
        
        if(!preg_match('|^[A-Z0-9.]+@[A-Z0-9]+\.[A-Z]{2,4}$|i',$email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
                echo "Định dạng mail không hợp lệ";
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
        
        $sql = "SELECT email from taikhoan";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_assoc($result)){
                if($email == $row['email']){
                        echo 'email đã tồn tại';
                        die;
                }
        }
        $pass_hash = password_hash($password,PASSWORD_DEFAULT);
        // $addacc = "INSERT INTO taikhoan(hoten,email,matkhau) VALUES('$username', '$email', '$pass_hash')";
        
        $addacc = "INSERT INTO taikhoan(hoten,email,matkhau) VALUES('$username', '$email', '$pass_hash')";
        $result = mysqli_query($conn,$addacc);
        if($result > 0){
                echo 'Đăng kí thành công';
        }

        

        

        
        
    
?>