<?php
session_start();
require '../../dangbaiviet/posts_connect.php';    
$user_id = $_SESSION['user'];

$m_id=$_POST["user_id"];
$sql="DELETE FROM friendrequest WHERE (sender_id = $user_id AND receiver_id = $m_id) OR (sender_id = $m_id AND receiver_id = $user_id)";
$result=$conn ->query($sql);

