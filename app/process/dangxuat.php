<?php
    // use SESSION
    session_start();

    if(isset($_SESSION['user_login'])){
        unset($_SESSION['user_login']);
        header('location: ../frontend/homepage.php');
    }

?>