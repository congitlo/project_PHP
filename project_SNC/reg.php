<?php
    require_once 'connect.php';

    echo"<pre>";

    $username = $_POST["username"];
    $password = $_POST["password"];
    
    
    if(!empty($username) && !empty($password)){
        //Insert dữ liệu
        echo"<pre>";
        //md5('$password') mã hóa mật khẩu
        $sql = "INSERT INTO `information` (`username`, `password`) 
        VALUES ('$username', MD5('$password'))";
        if($conn -> query($sql) === TRUE) {
            echo "Lưu dữ liệu thành công";
        }else{
            echo "Lỗi {$sql}".$conn->error;
        }
    }
    else{
        echo "Bạn cần nhập đầy đủ thông tin trước khi đăng ký";
    }
?>
