<?php
$user_id = $_SESSION['user'];
require 'dangbaiviet/posts_connect.php';
$sql = "SELECT * FROM user WHERE user_id = $user_id";
$result = $conn->query($sql);

$user = $result->fetch_assoc();

?>

<style>
body {
  font-family: "Roboto", sans-serif;     
}
button {
  background: #6abfd0;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  margin: 30px 0 0 0 !important;
}
button:hover,button:active,button:focus {
  background: #538c97
}
.formngoai {
  width: 600px;
  margin:50px auto;
  background: #FFFFFF;
  padding: 45px 45px 20px 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
  border-radius:2%;
  position: relative;
}
.formInput {
  font-family: 'Roboto', sans-serif;
  outline: 0;
  background: #f2f8ff;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
a {
  color: black;
  text-decoration: none;
}
</style>



<a type="button" onclick="window.history.back()" style="position:absolute;left:20px"> <i class="fa-solid fa-arrow-left"></i> Quay lại</a>
<div class="formngoai">
  <h3 style="margin:-20px 0 20px 0">Cập nhật thông tin cá nhân</h3>
  <form action="trangcanhan/ctrl_info.php" method="post">
    <input type="text" placeholder="Tên" class="formInput" name="username" value="<?php echo $user['username']; ?>" required/>
    <input type="email" placeholder="Email" class="formInput" name="email" value="<?php echo $user['email']; ?>" required/>
    <select name="gender" class="formInput" required>
      <option value="">Chọn giới tính...</option>
      <option value="Nam" <?php echo ($user['gender'] == 'Nam') ? 'selected' : ''; ?>>Nam</option>
      <option value="Nữ" <?php echo ($user['gender'] == 'Nữ') ? 'selected' : ''; ?>>Nữ</option>
      <option value="Khác" <?php echo ($user['gender'] == 'Khác') ? 'selected' : ''; ?>>Khác</option>
    </select>
    <input type="date" placeholder="Ngày sinh" class="formInput" name="date_of_birth" value="<?php echo $user['date_of_birth']; ?>" required/>
    <input type="text" placeholder="Học tại" class="formInput" name="study_at" value="<?php echo $user['study_at']; ?>"/>
    <input type="text" placeholder="Làm việc tại" class="formInput" name="working_at" value="<?php echo $user['working_at']; ?>"/>
    <select name="relationship" class="formInput" >
      <option value="">Chọn tình trạng quan hệ...</option>
      <option value="Độc thân" <?php echo ($user['relationship'] == 'Độc thân') ? 'selected' : ''; ?>>Độc thân</option>
      <option value="Hẹn hò" <?php echo ($user['relationship'] == 'Hẹn hò') ? 'selected' : ''; ?>>Hẹn hò</option>
      <option value="Kết hôn" <?php echo ($user['relationship'] == 'Kết hôn') ? 'selected' : ''; ?>>Kết hôn</option>
    </select>
    <button>Cập nhật thông tin</button>
  </form>
</div>