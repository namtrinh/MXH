<?php
session_start();
$user_id = $_SESSION['user'];
require '../dangbaiviet/posts_connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$study_at = $_POST['study_at'];
$working_at = $_POST['working_at'];
$relationship = $_POST['relationship'];

$sql_check = "SELECT * FROM user WHERE email = '$email'";
$result = $conn->query($sql_check);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['user_id'] != $user_id) {
        echo "
        <script>
            alert('EMAIL ĐÃ TỒN TẠI!');
            window.location.href='../index.php?pid=14';
        </script>";
    } else {
        $sql = "UPDATE user SET username='$username', gender='$gender', date_of_birth='$date_of_birth', study_at='$study_at', working_at='$working_at', relationship='$relationship' WHERE user_id=$user_id";
        if($conn->query($sql)){
            echo "
            <script>
                alert('Cập nhật thông tin thành công!'); 
                window.location.href='../index.php?pid=1&&user_id=".$user_id."';
            </script>";
        }
    }
} else {
    $sql = "UPDATE user SET username='$username', email='$email', gender='$gender', date_of_birth='$date_of_birth', study_at='$study_at', working_at='$working_at', relationship='$relationship' WHERE user_id=$user_id";
    if($conn->query($sql)){
        echo "
        <script>
            alert('Cập nhật thông tin thành công!'); 
            window.location.href='../index.php?pid=1&&user_id=".$user_id."';
        </script>";
    }
}
?>
