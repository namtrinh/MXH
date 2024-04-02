<?php
require 'posts_connect.php';    
$post_id = $_POST['post_id'];
$user_id = $_POST['user_id'];

$check_sql = "SELECT * FROM post_function WHERE save_by = $user_id AND post_id = $post_id";
$check_result = $conn ->query($check_sql);

    if ($check_result->num_rows > 0) {
        echo "saved";
    } else {
        echo "not_saved";
    }

