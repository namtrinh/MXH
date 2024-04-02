<?php 
session_start();
$user_id = $_SESSION['user'];
$conn = mysqli_connect("localhost", "root", "", "mxh");
    $sql = "UPDATE user SET bio = NULL WHERE user_id = $user_id "; 
    if ($conn->query($sql) === TRUE) {
        echo "Xoá thành công!";
        header("Location: " . $_SERVER['HTTP_REFERER']);
    } else {
        echo "Xóa thất bại! " . $conn->error;
    }
    $conn->close();
?>
