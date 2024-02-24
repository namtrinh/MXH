<head>
  <script src="https://kit.fontawesome.com/fec980010a.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/like.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/fec980010a.js" crossorigin="anonymous"></script>
  <title>Thêm bài viết</title>
</head>
<style>
.bai {
    text-align: center;
    width: 470px;
    border-bottom: 1px solid #ccc;
    margin: 10px -10px;
    float: left;
}
.user-info {
    display: flex;
    margin: 15px;
    position: relative;
}
.avtbai{
    width:40px;
    height:40px;
    border-radius: 50%;
    background-size: cover;
}
hr {
    border-top: 1px solid #ccc; 
    margin: 10px 0
}
.like_count {
    font-size: 14px;
    font-weight: 600;
    float: left;
    text-align: left;
    width: 100%;
}
.content{
  padding-left:10px;
    text-align:left;
    color:#555555;
}
.fa-paper-plane{
  float:left; 
  margin:10px;
  scale: 1.3;
  cursor: pointer;
  padding:2px
}
.chinhsuaa{
  position: absolute;
  scale: 1;
  right:-20px
}
.chinhsuaa >button>i{
  color: black;
}
.dropdown-menu {
position: absolute;
display: none;
min-width: 120px;
padding: 5px;
background-color: #ffffff;
box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
border-radius: 5px;
text-align: left;
}
.dropdown-menu.open {
display: block;
background-color: #EEEEEE;
}
.dropdown-item a {
display: block;
padding: 5px 0;
text-decoration: none;
color: #212529;
}

.dropdown-item:hover,
.dropdown-item:focus {
background-color: #f8f9fa;
}

.luu{
  position: absolute;
  scale:1.5;
  right:0px
}

.anh_post{
  width:75vh;
  height:95vh; 
  float: left; 
  position:relative;
}
.layout_phai{
  width:69vh;
  height:95vh; 
  float: left; 
  position:relative;
}
.layout_user_post{
  height: 60px; 
  border-bottom: lightgray solid 1px; 
  padding: 12px;
}
.ava_user_post{
  float:left;
  background-size:cover;
  background-position:center; 
  width: 35px; 
  border-radius:50%; 
  height:35px;
}
.name_user_post{
  margin:5px 50px; 
  width:100px;
  text-align:left;
  font-weight:380px;
}
.layout_cmt{
  padding:10px;
  height:80px
}
.ava_user_cmt{
  margin:5px;
  width:35px;
  height:35px;
  border-radius:50%;
  background-size:cover;
  background-position: center;
  float:left;
}
.name_user_cmt{
  font-weight:400px;
  font-size:13px;
  float:left; 
  margin:0 5px
}
.cmt_content{
  font-size:13px;
  float:left
}
.cmt_time{
  font-size:10px;
  color:gray;
  margin:5px; 
  float:left
}
.mess1{
    width: 100%;
    height: 80px;
    float: left;
    color: black;
    cursor: pointer;
}
.mess1:hover{
    background-color: rgb(247, 247, 247);
}
.ava{
    background-size: cover;
    border-radius: 50%;
    padding:25px;
    margin: 15px 0 0 10px;
    float: left;
    cursor: pointer;
}
.username{
    float: left;
    font-size: 14px; 
    margin: 18px 0 0 10px;
    font-family:'Segoe UI', Tahoma,Verdana, sans-serif;
    cursor: pointer;
    font-weight: 500;
}
.mini_content{
    float: left;
    font-size: 12px; 
    margin: -5px 0 0 10px;
    font-family:'Segoe UI', Tahoma,Verdana, sans-serif;
    color: gray;
}
</style>

<div class="container">
<?php
require 'posts_connect.php';
if (isset($_POST['btn_submit'])) {
    $post_by = $_POST['post_by'];
    $content = $_POST['content'];
    // Upload ảnh 
    $image = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $target = "img/" . basename($image);
    $sql = "INSERT INTO posts(post_by,content,image ) VALUES ($post_by,  '$content', '$image' )";

    if (!isset($_FILES['image'])|| $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {
        echo '<script>
                alert("Vui lòng chọn ít nhất một hình ảnh!");
                window.location.href = "index.php";
            </script>';
        exit();
    }
    
    if (mysqli_query($conn, $sql) && move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '<script>alert("Đăng bài viết thành công!");
                window.location.href = "index.php";
                exit();
            </script>';
    }
}

$sql_p = "SELECT * FROM posts 
  LEFT JOIN user ON posts.post_by = user.user_id
  LEFT JOIN friend ON (friend.user_id1 = $user_id AND friend.user_id2 = posts.post_by) OR (friend.user_id1 = posts.post_by AND friend.user_id2 = $user_id)
  WHERE friend.user_id1 IS NOT NULL OR friend.user_id2 IS NOT NULL OR posts.post_by=$user_id ORDER BY post_id DESC";
$result_p = mysqli_query($conn, $sql_p);
while ($row = mysqli_fetch_array($result_p)) {
  // Kiểm tra xem người dùng đã thích bài viết hay chưa
  $sql_check = "SELECT * FROM likes WHERE post_id = " . $row["post_id"] . " AND like_by = $user_id";
  $result = mysqli_query($conn, $sql_check);
  $liked_class = "";
  if (mysqli_num_rows($result) > 0) {
      // Người dùng đã thích bài viết => thêm class 'liked' vào nút like
      $liked_class = " liked";
  }
?>        
          <div class="bai">
            <div class="user-info">
                <div class ="avtbai" style="background-image:url('img/<?php echo $row["avartar"]?>')"></div>
                <div style="font-size:15px; margin:7px"><?php echo $row["username"]?></div>
                <div class="chinhsuaa">
                  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="width:30px;height:30px;background-color:transparent;border:none;">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                  </button>
                  <ul class="dropdown-menu">
                    <button class="dropdown-item edit"><a href="dangbaiviet/posts_edit.php?id='.$row['post_id'].'">Edit</a></button>
                    <button class="dropdown-item delete"><a href="dangbaiviet/posts_delete.php?id='.$row['post_id'].'"><i class="fa-solid fa-trash"  style="color: red;"></i> </a></button>
                    <button class="dropdown-item edit"><a href="index.php?pid=10&&post_id=<?php echo $row['post_id']?>">Go to post</a></button>
                  </ul>
                </div>
            </div>
            <div class="content"><?php echo $row['content'] ?></div>
            <div style="background-image:url('img/<?php echo $row['image']?>'); width:470px; margin:10px 0;height:600px; border-radius:3px; background-position: center; background-size:cover;"></div>
            
            <!-- Like Icon -->
            <form id="likeForm" method="post" action="" style="float:left; cursor:pointer">
              <input type="hidden" name="post_id" value="<?php echo $row["post_id"] ?>">
              <input type="hidden" name="like_by" value="<?php echo $user_id ?>">
              <a class="like-button<?php echo $liked_class; ?>" data-postid="<?php echo $row["post_id"]; ?>">
                <span class="like-icon">
                  <div class="heart-animation-1"></div>
                  <div class="heart-animation-2"></div>
                </span>
              </a>
              <span class="like_count"><?php echo $row['like_count'];?></span>
            </form>

            <!-- Comment Icon -->
            <div style="float:left;">
              <button type="button" class="btn p-0" data-toggle="modal" data-target="#myModal_<?php echo $row['post_id'] ?>">
                <img src="img/bubble-chat.png" style="width: 25px; height: 25px;margin:5px">
              </button>
            </div>

                <!-- The Modal -->
                <div class="modal fade" id="myModal_<?php echo $row['post_id'] ?>">
                  <div class="modal-dialog modal-xl">
                    <div class="modal-content" style="width: 145vh;margin:-1vh auto;height: 94vh">
                      <div class="modal-body" style="padding:0">
                        <!-- left -->
                        <div class="anh_post">
                          <div style="background-image:url('img/<?php echo $row['image']?>');width:75vh;height:93.8vh;border-radius:7px 0 0 7px ; background-position: center; background-size:cover;"></div>
                        </div>
                        <!-- right -->
                        <div class="layout_phai">
                          <div class="layout_user_post">
                            <a href="index.php?pid=2&&m_id=<?php echo $row["user_id"]?>" style="color:black;text-decoration:none">
                              <div class="ava_user_post"style="background-image:url('img/<?php echo $row["avartar"];?>')">
                              <div class="name_user_post"><?php echo $row["username"]?></div>
                            </a>
                          </div>
                        

                          <!-- view comment -->
                          <div style="height: 60vh;overflow-y: scroll; width:65vh">
                          <?php 
                          $ketnoi=new mysqli("localhost","root","","mxh");
                          $post_id=$row["post_id"];
                          $sql_cmt="select * from comment inner join user on comment.comment_by=user.user_id where post_id='$post_id'";
                          $result_cmt=$ketnoi->query($sql_cmt);
                          if ($result_cmt->num_rows > 0) {
                            while($row_cmt=$result_cmt->fetch_assoc()){?>
                            <div class="layout_cmt">
                              <div class="ava_user_cmt"style="background-image:url('img/<?php echo $row_cmt["avartar"]?>')"></div>
                              <div class="name_user_cmt"><?php echo $row_cmt["username"]?></div>
                              <div class="cmt_content"><?php echo $row_cmt["cmt_content"]?></div><br>
                              <div class="cmt_time"><?php echo $row_cmt["comment_time"]?></div>
                            </div>
                            <?php 
                            }
                          }else{?>
                            <div style="margin: 35% auto">
                              <div style="font-size: 20px;font-weight: bold;">Chưa có bình luận nào.</div>
                              <div style="font-size: 14px;text-align:center">Hãy bắt đầu bình luận!</div>
                            </div> 
                            <?php
                          }?>
                          </div>
                        
                          <!--footer  -->
                          <div class="footer" style="width:100%; height:6vh;padding:10px; float:left; border-top: lightgray solid 1px;">
                            <form id="likeForm" method="post" action="" style="float:left; cursor:pointer; margin-left:5px;">
                              <input type="hidden" name="post_id" value="<?php echo $row["post_id"] ?>">
                              <input type="hidden" name="like_by" value="<?php echo $user_id ?>">
                              <a class="like-button<?php echo $liked_class; ?>" data-postid="<?php echo $row["post_id"]; ?>">
                                <span class="like-icon">
                                  <div class="heart-animation-1"></div>
                                  <div class="heart-animation-2"></div>
                                </span>
                              </a>
                              <span class="like_count" style="padding-left:7px"><?php echo $row['like_count'];?></span>
                            </form>
                            <div class="cmt"style="float:left"> 
                              <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#message_modal">
                                <img src="img/bubble-chat.png" style="width: 25px; height: 25px;margin:5px">
                              </button>
                            </div>
                            <div class="share"style="float:left">
                              <button type="button" class="btn p-0" data-bs-toggle="modal" data-bs-target="#send_message_modal">
                                <i class="fa-regular fa-paper-plane"></i>
                              </button>
                            </div>
                            <div class="save not_saved" style="float:right">
                            <i class="fa-regular fa-bookmark"style="scale:1.5;margin: 10px"></i>
                            </div>
                            <!-- add comment -->
                            <div class="add comment" style="float:left; width:100%;height:50px;position: relative; padding:7px;">
                              <form id="commentForm" action="dangbaiviet/get_comments.php" method="post">
                                <img src="img/smile.PNG" style="width: 25px; height: 25px; left:0px;top:13px;position:absolute; z-index: 1;">
                                <input type="hidden"  name="post_id"  value="<?php echo $row['post_id'] ?>">
                                <input type="hidden"  name="comment_by"  value="<?php echo $user_id ?>">
                                <textarea name="cmt_content" placeholder="Add a comment" style="border: none;width:90%;height:7vh;padding:5px 0 0 40px; position:absolute; left:0"></textarea>
                                <button type ="submit" class="comment-btn" style="border: none; background: none; color: rgb(0, 162, 255); position:absolute; right:0; top:10px;">Post</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            
                
          </div>
          <!-- Share icon -->
          <a data-toggle="modal" href='#modal-id-share_<?php echo $row["post_id"]?>'style="color:black"><i class="fa-regular fa-paper-plane"></i></a>
          <div class="modal fade" id="modal-id-share_<?php echo $row["post_id"]?>">
            <div class="modal-dialog">
              <form action="" enctype="multipart/form-data" method="post">
                <div class="modal-content" style="width:480px;height:420px; border-radius:15px;margin-top:20vh">
                  <div class="modal-header"style="border-bottom: 1px solid #DBDBDB">
                    <h5 class="modal-title" style="position:absolute;left:42%;padding:10px;text-align:center;">Chia sẻ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body" style="padding:0;overflow:auto">
                    <!-- Search -->
                    <form action="" enctype="multipart/form-data" method="post">
                      <i style="top:12px;position: absolute;left:13px" class="fa-solid fa-magnifying-glass"></i>
                      <input class="timkiem1"name="timkiem1" data-userid="<?php echo $user_id?>"data-postid="<?php echo $row["post_id"]?>"style="width:100%;height: 40px;outline: none;padding-left: 45px;border: none;border-bottom: 1px solid #DBDBDB;">
                    </form>
                    <div class="ketquatimkiem"></div>
                    <?php
                    if(empty($_POST["timkiem1"])) {
                      $ketnoi= new mysqli('localhost','root','','mxh');
                      $friend = "SELECT * FROM user 
                      LEFT JOIN friend ON (friend.user_id1 = $user_id AND friend.user_id2 = user.user_id) OR (friend.user_id1 = user.user_id AND friend.user_id2 = $user_id)
                      WHERE friend.user_id1 IS NOT NULL OR friend.user_id2 IS NOT NULL";
                      $result_fr = $ketnoi->query($friend);  
                      while($row_fr = $result_fr->fetch_assoc()) {
                    ?>
                        <label for="mess<?php echo $row["post_id"]?>_<?php echo $row_fr["user_id"] ?>" class="mess1">
                          <div class="ava" style="background-image: url('img/<?php echo $row_fr["avartar"]?>')"></div>
                          <div class="username"><?php echo $row_fr["username"]?></div><br><br>
                          <div class="mini_content"><?php echo $row_fr["email"]?></div>
                          <input type="hidden" name="share_by" value="<?php echo $user_id?>">
                          <input type="hidden" name="post_id" value="<?php echo $row["post_id"]?>">
                          <input type="checkbox"name="share_to" value="<?php echo $row_fr["user_id"]?>" id="mess<?php echo $row["post_id"]?>_<?php echo $row_fr["user_id"] ?>" style="float:right;margin:-20px 20px">
                        </label>
                    <?php
                      }
                    }
                    ?>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary send_post_btn" data-postid="<?php echo $row["post_id"]?>">Gửi</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
          <div class="luu"> <i class="fa-regular fa-bookmark"></i></div><br>
      </div>       
<?php
  }
?>    




<script>
$(document).ready(function(){
  $('.like-button').on('click', function(e) {
    e.preventDefault();
    var post_id = $(this).data('postid');
    var like_by = $('input[name="like_by"]').val();

    // Thay đổi trạng thái của nút like ngay lập tức
    $(this).toggleClass('liked');
    var isLiked = $(this).hasClass('liked');

    var likeButton = $(this); // Lưu trữ nút like hiện tại

    $.ajax({
      url: 'dangbaiviet/update_like_count.php',
      type: 'POST',
      data: {
        'post_id': post_id,
        'like_by': like_by,
        'isLiked': isLiked
      },
      success: function(data){
        // Cập nhật số lượng like trên trang web
        likeButton.parent().find('.like_count').text(data);
      }
    });
  });



    

  $('.send_post_btn').on('click', function(e) {
      e.preventDefault(); 
      var post_id = $(this).data('postid');
      // Thu thập dữ liệu từ các checkbox đã chọn
      var selectedValues = [];
      $('input[name="share_to"]:checked').each(function() {
          selectedValues.push($(this).val());
      });
      $.ajax({
          url: 'share_post.php', 
          type: 'post', 
          data: {
              share_by: $('input[name="share_by"]').val(),
              post_id: post_id,
              share_to: selectedValues // Gửi mảng các giá trị đã chọn
          },
          success:function(response){
              alert(response);
          }
      });
  });

  $('.timkiem1').on('input', function(){
        var timkiem = $(this).val();
        var postId = $(this).data('postid');
        var userId = $(this).data('userid');
        $.ajax({
            url: 'timkiem/timkiem.php', 
            method: 'POST',
            data: {
              timkiem: timkiem,
              post_id: postId,
              user_id: userId
            },
            success: function(response){
              $('.ketquatimkiem').html(response);
            }
        });
    });
    

});
</script>



