<?php     
session_start();             
date_default_timezone_set('Asia/Ho_Chi_Minh');
require '../dangbaiviet/posts_connect.php';    
$timkiem = $_POST["timkiem"];
$user_id = $_SESSION['user'];
$sql = "SELECT *
FROM user 
LEFT JOIN friendrequest ON (friendrequest.sender_id = $user_id AND friendrequest.receiver_id = user.user_id) OR (friendrequest.sender_id = user.user_id AND friendrequest.receiver_id = $user_id)
LEFT JOIN message ON (message_by = $user_id AND message_to = user_id) OR (message_by = user_id AND message_to = $user_id)
WHERE (status='bạn bè'AND username LIKE '%$timkiem%') OR ((message_by = $user_id OR message_to = $user_id) AND username LIKE '%$timkiem%')
GROUP BY user_id";
$result1 = $conn->query($sql);

function getStatus($is_active, $last_activity) {
    if ($is_active == 1) {
        return 'Đang hoạt động';
    } else {
        $time_offline = time() - strtotime($last_activity);
        if ($time_offline < 3600) {
            return 'Hoạt động ' . floor($time_offline / 60) . ' phút trước';
        } elseif ($time_offline < 86400) {
            return 'Hoạt động ' . floor($time_offline / 3600) . ' giờ trước';
        } elseif ($time_offline > 2592000) {
                return 'Ngưng hoạt động ' ;
            }
         else {
            return 'Hoạt động ' . floor($time_offline / 86400) . ' ngày trước';
        }
    }
}

?>

<?php
if ($result1->num_rows > 0) {
  while($row_ten = $result1->fetch_assoc()) {
    $timban = $row_ten['user_id'];
    $status = getStatus($row_ten['is_active'], $row_ten['last_activity']);
?>

    <a href="index.php?pid=0&&m_id=<?php echo $timban?>">
            <div class="mess1 <?php echo ($timban == $m_id) ? 'active' : ''; ?>">
                <div class="ava" style="background-image: url('img/<?php echo $row_ten["avartar"]?>');"></div>
                <div class="username"><?php echo $row_ten["username"]?> </div><br><br>
                <div class="mini_content" style="font-weight:400;color:green;" ><?php echo $status; ?></div>
            </div> 
        </a>
<?php
  }
}else echo 'Không tìm thấy bạn bè!';
?>
