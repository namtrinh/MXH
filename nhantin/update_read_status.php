<?php 
session_start();
$user_id = $_SESSION['user'];
$ketnoi= new mysqli('localhost','root','','MXH');
$m_id = $_POST["m_id"];
$updateQuery = "UPDATE message SET read_status = 1 WHERE (message_by = $m_id AND message_to = $user_id)  OR (message_by = $user_id AND message_to = $m_id)";
$ketnoi->query($updateQuery);