<?php 
session_start();
require '../dangbaiviet/posts_connect.php';    
    $user_id = $_SESSION['user'];
    $sql = "UPDATE user SET cover_picture = NULL WHERE user_id = $user_id"; 
    if ($conn->query($sql) === TRUE) {
        echo "Xoá thành công!";
        header("location:../index.php?pid=1");
    } else {
        echo "Xóa thất bại! " . $conn->error;
    }
    $conn->close();
?>
