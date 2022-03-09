<?php
    session_start();
    if(isset($_SESSION['user_login'])){
        include './partition/headerlogin.php';
    }else{
        include './partition/headerdefault.php';
    }
    $id_product = $_GET['id'];
?>
<h1>Đây là chi tiết sản phẩm <?php echo $id_product; ?></h1>










<?php
    include './partition/onlycript.php';
?>