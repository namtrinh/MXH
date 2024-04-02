<?php
require '../dangbaiviet/posts_connect.php';    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$ho = $_POST['ho'];
$ten = $_POST['ten'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$ngaysinh = $_POST['ngaysinh'];
$thangsinh = $_POST['thangsinh'];
$namsinh = $_POST['namsinh'];
$gioitinh = $_POST['gioitinh'];
$passMaHoa= md5($pass);

$username = $ho . ' ' . $ten;
$ngaysinh = date('Y-m-d', strtotime($namsinh . '-' . $thangsinh . '-' . $ngaysinh));
$sql_check = "SELECT * FROM user WHERE email = '$email'";
if ($conn->query($sql_check)->num_rows > 0) {
    echo "
      <script>
          alert('EMAIL ĐÃ TỒN TẠI!');
          setTimeout(function(){
              window.location.href = 'dangky.php';
          }, 50);
      </script>";
} else{
  $sql="INSERT INTO user(username,email,password,date_of_birth,gender) 
  VALUES ('$username','$email','$passMaHoa','$ngaysinh','$gioitinh')";
  if ($conn->query($sql) === TRUE) {
    header("location:dangnhap.php?message=Tạo tài khoản thành công!");
} else {
    echo "Thêm dữ liệu thất bại <br>Lỗi: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>
