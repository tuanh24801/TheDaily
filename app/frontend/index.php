<?php
     session_start();
     if(isset($_SESSION['user_login'])){
         header('location: homepage.php');
     }else{
        header('location: homepage.php');
     }
?>