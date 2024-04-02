<?php 
    session_start();
    $post_id = $_POST['post_id'];
    $user_id = $_SESSION['user']; 

    require 'dangbaiviet/posts_connect.php';    

    $sql = "DELETE FROM post_function WHERE post_id = $post_id AND save_by = $user_id";
    $result = $conn -> query($sql);

    if ($result) {
        echo "success";
    } 

