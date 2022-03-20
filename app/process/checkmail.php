<?php 
    include '../../database/config.php';
    $trung = 0;
    $emailinput = $_POST['emailinput'];
    $sql = "SELECT email FROM taikhoan";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        if($row['email'] == $emailinput){
            $trung++;
        }
    }
    if($trung != 0){
        echo 'trùng';
    }
?>