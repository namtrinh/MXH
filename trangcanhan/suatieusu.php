<?php 
session_start();
$tieusu=$_POST["tieusu"];
require '../dangbaiviet/posts_connect.php';    
$user_id = $_SESSION['user'];
$sql="update user set bio='$tieusu'WHERE user_id = $user_id";
if ($conn->query($sql) === TRUE) {
   header("Location: " . $_SERVER['HTTP_REFERER']);
} else {
   echo "Cập nhật dữ liệu thất bại <br>Lỗi:" . $sql . "<br>" . $conn->error;
}
?>
