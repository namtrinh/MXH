<?php session_start();
    require '../dangbaiviet/posts_connect.php';    
    $user_id = $_SESSION['user'];

    $thu_muc="../img/";
    $ten_files_temp=$_FILES["anhdaidien"]["tmp_name"];
    $ten_files_moi=$thu_muc . uniqid() . '-' . $_FILES["anhdaidien"]["name"];
    move_uploaded_file($ten_files_temp, $ten_files_moi);
    $anhdaidien=basename($ten_files_moi);
    $sql="UPDATE user SET avartar='$anhdaidien' WHERE user_id=$user_id";
    
    if ($conn->query($sql) === TRUE) {
        header("location:../index.php?pid=1");
    } else {
        echo "Cập nhật thất bại! " . $conn->error;
    }
?>