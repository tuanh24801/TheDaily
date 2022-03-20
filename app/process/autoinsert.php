<?php 
        require '../../database/config.php';
        $username = 'name1';
        $email = 'user';
        $pass_hash = password_hash('123456789',PASSWORD_DEFAULT);
    $int = 0;
    echo "binhf tinxh";
    die;
    while($int <= 20){
            $addacc = "INSERT INTO taikhoan(hoten,email,matkhau) VALUES('$username+$int', '$email+$int', '$pass_hash')";
            $result = mysqli_query($conn,$addacc);
            $int++;
    }
?>