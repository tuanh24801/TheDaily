<?php
    const HOST = 'localhost';
    const USERNAME = 'root';
    const PASSWORD = '';
    const DATABASE_NAME = 'db_thedaily';
    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE_NAME);
    if(!$conn){
        echo 'Lỗi kết nối Database';
    }
?>