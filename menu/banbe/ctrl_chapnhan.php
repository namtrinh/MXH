<?php
session_start();
require '../../dangbaiviet/posts_connect.php';    
$user_id = $_SESSION['user'];
$m_id=$_POST["user_id"];
$time = date("Y-m-d H:i:s");

$sql_update="UPDATE friendrequest SET status = 'bạn bè' where sender_id = $m_id and receiver_id = $user_id";
$result_update=$conn ->query($sql_update);

$sql_tb="INSERT INTO notification(noti_by, noti_content,noti_to,noti_time) VALUES ($user_id, 'đã chấp nhận lời mời kết bạn.',$m_id,'$time')";
$result_tb=$conn ->query($sql_tb);

$sql_tb1="DELETE FROM notification WHERE noti_by = $m_id and noti_to = $user_id ";
$result_tb1=$conn ->query($sql_tb1);