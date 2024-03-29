<?php 
session_start();
$user_id = $_SESSION['user'];
$ketnoi= new mysqli('localhost','root','','MXH');
date_default_timezone_set('Asia/Ho_Chi_Minh');
function getStatus($is_active, $last_activity) {
    if ($is_active == 1) {
        return '<i class="fa-solid fa-circle"></i>';
    } else {
        $time_offline = time() - strtotime($last_activity);
        if ($time_offline < 3600) {
            return floor($time_offline / 60) . 'p';
        } elseif ($time_offline < 86400) {
            return floor($time_offline / 3600) . 'g';
        } elseif ($time_offline < 2592000) {
            return floor($time_offline / 86400) . 'n';
        }else{
            return 'off';
        }
        
    }
}

//tung nhan tin
$friend_default = "SELECT *, MAX(message.timestamp) as latest_timestamp FROM user 
JOIN message ON (message_by = $user_id AND message_to = user_id) OR (message_by = user_id AND message_to = $user_id)
GROUP BY user_id
ORDER BY latest_timestamp DESC";
$result_fr = $ketnoi->query($friend_default);


while ($row_fr = $result_fr->fetch_assoc()) {
    $friend_id = $row_fr['user_id'];


    // lay tin nhan moi nhat
    $sql_latest = "SELECT * FROM message WHERE (message_by=$user_id AND message_to=$friend_id) OR (message_by=$friend_id AND message_to=$user_id) ORDER BY timestamp DESC LIMIT 1";
    $result_latest = $ketnoi->query($sql_latest);
    if ($result_latest->num_rows > 0) {
        $row_latest = $result_latest->fetch_assoc();
        $latest_content = $row_latest['content'];
    } else {
        $latest_content = "Chưa có tin nhắn nào!";
    }

    // Lấy trạng thái online/offline và thời gian offline gần nhất
    $status = getStatus($row_fr['is_active'], $row_fr['last_activity']);

    $current_time = time();
    $post_time = strtotime($row_latest["timestamp"]);
    $time_diff = $current_time - $post_time;
    if ($time_diff < 60) {
      $time_description = "bây giờ";
    } elseif ($time_diff < 3600) {
      $time_description = floor($time_diff / 60) . " phút trước";
    } elseif ($time_diff < 86400) {
      $time_description = floor($time_diff / 3600) . " giờ trước";
    } else {
      $time_description = floor($time_diff / 86400) . " ngày trước";
    }
    ?>
    <a href="index.php?pid=0&&m_id=<?php echo $friend_id?>" onclick="updateReadStatus(<?php echo $friend_id?>)">
        <div class="mess1" style="position:relative" data-m-id="<?php echo $friend_id; ?>">
            <div class="ava" style="position:relative;background-image: url('img/<?php echo $row_fr["avartar"]?>');">
                <div style="<?php echo $status == '<i class="fa-solid fa-circle"></i>' ? '':'background:#D3E3D5;'?>position:absolute;left:35px;bottom:-3px;font-size:11px;border-radius:10px;padding:2px 5px;color:#2E9A49;font-weight:500"><?php echo $status ?></div>
            </div>
            <div class="username"><?php echo $row_fr["username"]?> </div><br><br>
            <div class="mini_content" style="<?php echo $row_latest["read_status"] == 0 && $row_latest["message_by"] == $friend_id? 'font-weight:600;color:black;' : '';?>max-width:200px;">
                <?php echo $latest_content?>
                <div style="font-size:12;position:absolute;right:20px;bottom:20px"><?php echo $time_description ?></div>
            </div>
            
        </div> 
    </a>
    <?php
}
?>

<script>
function updateReadStatus(m_id) {
    $.ajax({
        url: 'nhantin/update_read_status.php', 
        type: 'POST',
        data: { 'm_id': m_id },
        success: function() {
        }
    });
}
</script>



