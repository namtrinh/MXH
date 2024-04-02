<?php 
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
require '../dangbaiviet/posts_connect.php';    

if(isset($_SESSION['user'])){
    $current_time = date('Y-m-d H:i:s'); // Lấy thời gian hiện tại
    $sql_update = "UPDATE user SET is_active=0, last_activity='$current_time' WHERE user_id=".$_SESSION['user'];
    $conn->query($sql_update);

    unset($_SESSION['user']);
    echo "<script>
        alert('ĐĂNG XUẤT THÀNH CÔNG!');
        setTimeout(function(){
            window.location.href = 'dangnhap.php';
        }, 50);
    </script>";
} else {
    echo 'That bai';
}
?>
