<?php 
session_start();
require '../dangbaiviet/posts_connect.php';    
$user_id = $_SESSION['user'];
$sql = "SELECT * FROM user
INNER JOIN friendrequest ON (friendrequest.sender_id = $user_id AND friendrequest.receiver_id = user.user_id) OR (friendrequest.sender_id = user.user_id AND friendrequest.receiver_id = $user_id)
WHERE status = 'bạn bè'";
include 'hienthibanbe.php';