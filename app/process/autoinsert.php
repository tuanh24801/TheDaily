<?php 
        require '../../database/config.php';
        $names = array(
                'Christopher',
                'Ryan',
                'Ethan',
                'John',
                'Zoey',
                'Sarah',
                'Michelle',
                'Samantha',
            );
        $username = $names[mt_rand(0, sizeof($names) - 1)];
        $mail = '@gmail.com';
        $email = 'user';
        $pass_hash = password_hash('123456789',PASSWORD_DEFAULT);
    $int = 0;
    while($int <= 20){
            $addacc = "INSERT INTO taikhoan(hoten,email,matkhau) VALUES('$username.$int', '$email.$int.$mail', '$pass_hash')";
            $result = mysqli_query($conn,$addacc);
            $int++;
    }
?>