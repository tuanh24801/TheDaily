<?php 
    include '../../database/config.php';
    $id = $_POST['id_acccount'];
    $sql_xoatk = "DELETE FROM taikhoan WHERE id_taikhoan = '$id'";
    $result_xoand = mysqli_query($conn,$sql_xoatk);
?>