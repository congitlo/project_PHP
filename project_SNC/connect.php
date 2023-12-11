<?php
    $host = 'localhost';// Host
    $username = 'root';//Tên localhost
    $password = '';// Mật khẩu rổng
    $database = 'project_snc';// Tên database

    $conn = new mysqli($host, $username, $password, $database);
    if($conn->connect_error){
        die('kết nối không thành công: '. $conn->connect_error);
    }
    echo"kết nối thành công";
    
?>