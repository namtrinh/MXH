<?php
$sql_story = "SELECT * FROM story 
left JOIN user ON story.user_id = user.user_id
LEFT JOIN friendrequest ON (friendrequest.sender_id = $user_id AND friendrequest.receiver_id = story.user_id) OR (friendrequest.sender_id = story.user_id AND friendrequest.receiver_id = $user_id)
WHERE status='bạn bè' OR story.user_id=$user_id ORDER BY story_id DESC";
$result_story = $ketnoi->query($sql_story);
date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<link rel="stylesheet" href="css/menu.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/fec980010a.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<style>
  #openModalBtn {
    padding-top: 50%;
    width: 145px;
    background: none;
    border: none;
    color: #777777;
    font-size: 40px;
    cursor: pointer
  }

  .form-container {
    max-width: 500px;
    margin: 0 auto;
    background-color: #f2f2f2;
    padding: 20px;
    border-radius: 5px;
  }

  .form-container label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }

  .form-container input[type="text"],
  .form-container textarea,
  .form-container input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 14px;
  }

  .form-container textarea {
    resize: vertical;
    height: 100px;
  }

  .form-container input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    font-size: 16px;
    border-radius: 4px;
  }

  .form-container input[type="submit"]:hover {
    background-color: #45a049;
  }

  .form-container .file-inputs-container {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
  }

  .form-container .file-inputs-container input[type="file"] {
    flex: 1;
  }

  .story {
    position: relative;
    display: inline-block;
    margin: 20px;
    width: 145px;
    height: 220px;
    overflow: hidden;
  }


  video::-webkit-media-controls-enclosure {
    display: none !important;
  }

  .vien_ava_story {
    position: absolute;
    top: 5px;
    left: 5px;
    z-index: 1;
  }

  .ten_story {
    margin-top: 10px
  }

  .modal_post_story {
    display: none;
    position: fixed;
    z-index: 2;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
    border: none
  }

  .modal-contentt {
    background-color: #fefefe;
    margin: 5% auto;
    width: 500px;
  }

  .close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
  }

  .close:hover {
    color: #000;
  }

  .layout_story::-webkit-scrollbar {
    display: none;
    /* Safari và Chrome */
  }

  .largeImage {
    width: 50vh;
    height: 73vh;
    margin: 0 auto;
    background-size: cover;
    background-position: center;
  }

  .smallImage {
    width: 10vh;
    height: 10vh;
    margin: 5px 0 0 5px;
    filter: brightness(70%);
    float: left;
    cursor: pointer;
    background-size: cover;
    background-position: center;
    position: relative
  }

  .closeButton {
    position: absolute;
    top: 0;
    right: 0;
    cursor: pointer;
    font-size: 15px;
  }

  .custom-select {
    border: none;
    background: #EEE;
    border-radius: 10px;
    font-weight: 500;
    font-size: 13px;
    padding: 5px;
    cursor: pointer;
  }
</style>
<div class="gop_2_menu">
  <div class="menu_giua">
    <div class="layout_menu_giua">
      <div class="layout_story" style="overflow:auto">
        <div class="stories-container">
          <div class="story">

            <button id="openModalBtn"><i class="fa-solid fa-circle-plus" style="object-fit: cover"></i></button>
            <div id="myModal" class="modal_post_story">
              <div class="modal-contentt">
                <span id="closeModalBtn" class="close">&times;</span>
                <div class="form-container">
                  <form action="story/upload.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="story_by" value=<?php echo $user_id ?>>
                    <label for="content">Content:</label><br>
                    <textarea id="content" name="content" rows="4" cols="50"></textarea><br><br>

                    <label for="video">Select Video:</label>
                    <input type="file" id="video,img" name="file"
                      accept="video/mp4,video/x-m4v,video/*,image/png,image/jpg,image/*" required><br><br>

                    <label for="music">Select Music:</label>
                    <input type="file" id="music" name="music" accept="audio/mp3,audio/*,audio/m4a"><br><br>

                    <input type="submit" value="Submit" name="submit">
                  </form>
                </div>
              </div>
            </div>
          </div>

          <?php
          // Khởi tạo mảng để lưu trữ ID của các modal
          $modal_ids = array();
          while ($row_story = $result_story->fetch_assoc()) {
            $story_id = $row_story["story_id"];
            $modal_ids[] = $story_id; // Thêm ID của modal vào mảng
            //ktra tgian post story
            $postTime = strtotime($row_story["story_time"]);
            $currentTime = time();
            $timeDifference = $currentTime - $postTime;
            if ($timeDifference < 24 * 60 * 60) { //tính theo giấy
              $file = $row_story["file"];
              echo '<a href="#modal_story_' . $row_story["story_id"] . '"  class="story" style="border:none;padding:0;margin:0 2px">';
              if (strpos($file, '.png') || strpos($file, '.jpg') || strpos($file, '.jpeg')) {
                echo '<div class="story modal-trigger" style="background-image:url(story/' . $file . ')"></div>';
              } else {
                echo '<video class="story modal-trigger"  muted style="z-index:0;width: 100%;height: 100%;object-fit: cover;">
                        <source src="story/' . $file . '" type="video/mp4">    
                      </video>';
              } ?>
              <div class="vien_ava_story">
                <div class="ava_story" style="background-image: url('img/<?php echo $row_story["avartar"] ?>');"></div>
              </div>
              <div class="ten_story">
                <?php echo $row_story["username"] ?>
              </div>
              </a>
              <!-- Modal story -->
              <div class="modal fade" id="modal_story_<?php echo $row_story["story_id"] ?>" data-toggle="modal"
                data-storyid="<?php echo $row_story["story_id"] ?>" onclick="muteAudio(this)">
                <div class="modal-dialog">
                  <div class="modal-content"
                    style="z-index:2;width:450px;height:650px;border-radius:20px;background:none;padding:0">
                    <div class="modal-body" style="padding:0;position:relative;background:black;border-radius:20px;">
                      <div class="vien_ava_story">
                        <div class="ava_story" style="background-image: url('img/<?php echo $row_story["avartar"] ?>');">
                        </div>
                      </div>
                      <div class="ten_story" style="top:10px;left:60px;z-index:1">
                        <?php echo $row_story["username"] ?>
                      </div>
                      <?php if ($user_id == $row_story["user_id"]) { ?>
                        <div class="chinhsuaa">
                          <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false"
                            style="width:30px;height:30px;background-color:transparent;border:none;color:white">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                          </button>
                          <ul class="dropdown-menu">
                            <button class="dropdown-item delete">
                              <a href="story/xoa_story.php?story_id=<?php echo $row_story["story_id"] ?>">
                                <i class="fa-solid fa-trash" style="color: red;"></i> Xóa</a>
                            </button>
                          </ul>
                        </div>
                      <?php } ?>
                      <?php
                      if (strpos($file, '.png') || strpos($file, '.jpg') || strpos($file, '.jpeg')) {
                        echo '<div class="image" style="background-image:url(story/' . $file . ');width:100%;height:650px;border-radius:20px;background-size:cover"></div>';
                      } else {
                        echo '<video class="video"  muted loop autoplay style="width:450px;height:650px;border-radius:20px;">
                                <source src="story/' . $file . '" type="video/mp4">    
                              </video>';
                      }
                      ?>

                      <audio id="audio_<?php echo $row_story["story_id"] ?>" loop>
                        <source src="story/<?php echo $row_story["music"] ?>" type="audio/mpeg">
                      </audio>

                      <div style="position:absolute;left:50px;bottom:20px;color:white">
                        <?php echo $row_story["content"] ?>
                      </div>
                      <button
                        style="position:absolute;right:50px;bottom:20px;border:none;background:none;scale:2;color:white"><i
                          class="fa fa-heart" aria-hidden="true"></i></button>

                    </div>
                  </div>
                </div>
              </div>

            <?php }
          } ?>
          <script>
            var modalIds = <?php echo json_encode($modal_ids); ?>; // Mảng ID của các modal
            var interacted = false; // Biến kiểm tra xem người dùng đã tương tác với trang hay chưa

            // Hàm mở modal tiếp theo
            function openNextModal(index) {
              var currentModalId = 'modal_story_' + modalIds[index];
              $('#' + currentModalId).modal('show'); // Hiển thị modal hiện tại
              // Đặt hẹn giờ sau 30 giây để tự đóng modal và mở modal tiếp theo
              setTimeout(function () {
                $('#' + currentModalId).modal('hide'); // Ẩn modal hiện tại
                var nextIndex = index + 1;
                if (nextIndex < modalIds.length) { // Nếu còn modal tiếp theo trong danh sách
                  openNextModal(nextIndex); // Mở modal tiếp theo
                }
              }, 30000);
            }

            // Bắt sự kiện click vào phần tử mong muốn
            $(document).ready(function () {
              $('.modal-trigger').click(function () {
                var index = $(this).index('.modal-trigger'); // Lấy chỉ số của modal được click
                interacted = true; // Đặt biến interacted thành true khi người dùng click
                openNextModal(index); // Bắt đầu mở modal và chuyển đổi tự động
              });
            });

          </script>
        </div>

      </div>
      <form action="" enctype="multipart/form-data" method="post" class="form">
        <div class="vien">
          <div class="avatar" style="background-image:url('img/<?php echo $row_id["avartar"] ?>')"></div>
          <button type="button" class="thanhdangbaiviet" data-bs-toggle="modal" data-bs-target="#exampleModal"
            data-bs-whatever="@mdo">Đăng bài viết </button>
          <hr>
          <div class="menunho">
            <button>
              <i class="fa-regular fa-image" style="color: #2ecc71;"></i> Hình ảnh
            </button>
            <button id="button-menu1">
              <i class="fa-solid fa-video" style="color: #ff0000"></i> Video
            </button>
          </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
            style="position:absolute;right:20px;top:20px;color:white"><i class="fa-solid fa-xmark"
              style="scale:2"></i></button>
          <div class="modal-dialog" style="margin:5% 23%">
            <div class="modal-content" style=" width:115vh; height:80vh; border-radius:10px">
              <div class="modal-header" style="padding:25px">
                <h1 class="modal-title fs-5" id="exampleModalLabel"
                  style="position:absolute;left:42%;padding:10px;text-align:center;">Bài đăng mới</h1>
                <input type="submit" name="btn_submit" value="Đăng"
                  style="background:none;color: #0099FF; padding: 10px 20px;border:none;position:absolute;right:0">
              </div>
              <div class="modal-body" style="padding:0">
                <!-- ảnh lớn  -->
                <div id="imagePreview" style="float:left;width:60%;height:71.5vh;overflow:hidden">

                  <div id="content1" style="margin:30% 0;width:100%;text-align:center;padding:20px">
                    <input type="hidden" name="post_by" value=<?php echo $user_id ?>>
                    <img src="https://cdn-icons-png.flaticon.com/512/13768/13768311.png" width="90px"><br> Chọn ảnh
                    hoặc video
                    <br>
                    <input type="file" name="images[]" class="hinhanh" style="margin: 20px 30%" multiple
                      accept="image/*" required onchange="handleFile(this)">
                  </div>
                </div>

                <div style="width:40%;height:100%;float:right; border-left:1px solid #EEEEEE">
                  <div style="padding:10px;height:60px">
                    <div
                      style="background-image:url('img/<?php echo $row_id["avartar"] ?>'); background-size:cover;width:35px; height:35px; border-radius: 50%;float:left">
                    </div>
                    <label style="float:left; margin:1% 2%">
                      <?php echo $row_id["username"] ?>
                    </label>

                    <select name="statuss" class="custom-select">
                      <option value="public">&#x1F30E; Công khai</option>
                      <option value="friend">&#x1F91D; Bạn bè</option>
                      <option value="only_me">&#x1F512; Chỉ mình tôi</option>
                    </select>


                  </div>
                  <textarea style="width:100%;border:none; height:5em;padding:0 20px;resize: none;" name="content"
                    placeholder="Nội dung..."></textarea>
                  <!-- ảnh nhỏ -->
                  <div id="imagePreview2" style="width:100%"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <?php require 'dangbaiviet/posts_xuly.php' ?>
    </div>
  </div>
</div>

<script>
  $(document).ready(function () {
    $('.modal').on('shown.bs.modal', function () {
      $(this).find('audio')[0].play();
    });

    $('.modal').on('hidden.bs.modal', function () {
      var audio = $(this).find('audio')[0];
      audio.pause();
      audio.currentTime = 0; // Reset audio về thời điểm ban đầu
    });


  });
  function muteAudio(modal) {
    var audioId = modal.getAttribute("data-storyid");
    var audio = document.getElementById("audio_" + audioId);
    audio.stop = true; // Mute audio khi modal được đóng
  }


  function handleFile(input) {
    checkFileSize(input);
    previewImages(input);

    var content1 = document.getElementById("content1");
    content1.style.display = "none";
  }
  function previewImages(input) {
    var files = input.files;
    var imagePreview = document.getElementById("imagePreview");
    var imagePreview2 = document.getElementById("imagePreview2");

    for (var i = 0; i < files.length; i++) {
      var file = files[i];

      var imageUrl = URL.createObjectURL(file);
      (function (imageUrl, file) {
        // Tạo
        var largeImage = document.createElement("div");
        largeImage.classList.add("largeImage");
        largeImage.style.backgroundImage = "url('" + imageUrl + "')";
        imagePreview.appendChild(largeImage);

        var smallImage = document.createElement("div");
        smallImage.classList.add("smallImage");
        smallImage.style.backgroundImage = "url('" + imageUrl + "')";
        imagePreview2.appendChild(smallImage);

        var closeButton = document.createElement("div");
        closeButton.classList.add("closeButton");
        closeButton.innerHTML = "&#10006;";
        closeButton.addEventListener("click", function () {
          if (imagePreview.contains(largeImage)) {
            imagePreview.removeChild(largeImage);
            imagePreview2.removeChild(smallImage);

            // Tìm và xóa tên của file trong input
            var fileName = file.name;
            var inputElement = document.querySelector("input[name='images[]']"); // Tên của input
            var files = Array.from(inputElement.files);
            var newFiles = files.filter(function (f) {
              return f.name !== fileName;
            });

            // Tạo một DataTransfer object mới
            var dataTransfer = new DataTransfer();
            newFiles.forEach(function (file) {
              dataTransfer.items.add(file);
            });

            // Cập nhật lại files property của input
            inputElement.files = dataTransfer.files;

            // Nếu không còn tệp nào, hiển thị content1
            if (inputElement.files.length === 0) {
              var content1 = document.getElementById("content1");
              content1.style.display = "block";
            }
          }
        });

        smallImage.appendChild(closeButton);
        smallImage.addEventListener("click", function () {
          largeImage.style.backgroundImage = "url('" + imageUrl + "')";
          largeImage.scrollIntoView({ behavior: "auto", block: "center" });

          var allSmallImages = imagePreview2.querySelectorAll("div");
          allSmallImages.forEach(function (smallImg) {
            smallImg.style.filter = "brightness(70%)";
          });
          this.style.filter = "brightness(110%)";
        });
      })(imageUrl, file);
    }
  }


  function checkFileSize(input) {
    var files = input.files;

    for (var i = 0; i < files.length; i++) {
      var fileSize = files[i].size;
      var minSize = 50 * 1024;

      if (fileSize < minSize) {
        alert('Kích thước của ảnh phải lớn hơn 50kB.');
        input[typefile].value = '';
        return false;
      }
    }
    return true;
  }


</script>