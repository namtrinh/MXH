<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<title>fake</title>
</head>
<?php
$link=new mysqli("localhost","root","","mxh");
$sql = "SELECT USERNAME, TIEUSU, ANHBIA,ANHDAIDIEN FROM USER WHERE ID_USER = 1";
$result=$link->query($sql);
$row=$result->fetch_assoc();
?>
<style>
    body {
    margin: 0;
    padding: 0;
    overflow-y: scroll;
    box-sizing: border-box;
        }
   .hidden {
        display: none;
    }
    .bia {
        margin: 5.5% 5% 0 5%;
        height:65%;
        width:90%; 
        border-radius:5px; 
        position: relative;
        z-index:0;
    }
    .bia1 {
      float:right;
      width:78%;
    }
    .khungcanhan {
      background-color:white;
      float:left;
      height:100%; 
      width:22%;
      border-radius:5px;
      position: absolute;
      background: linear-gradient(to bottom, gray, white);

    }
    .canhan1 {
      height:40%;
      position: relative;
      border-radius:5px 5px 0 0;
    }
    .name {
      height:45% ;
      text-align:center;
      font-family:Helvetica, Arial,sans-serif;
      font-size: 2vw;
    }
    
    .banbe {
      height:25%;
      top:0%;
      font-size:1vw;
      color:dimgray;
      margin-top:-5%;
    }
    .anhdaidien {
        height: 60%;
        width: 40%;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        border-radius: 50%;
        border:3px solid white;
    }
    .tieusu {
      height:50%;
      font-size:1.3vw
    }
    .congcu {
  display: flex;
  justify-content: space-around; 
}

.congcu1 {
  font-size: 1.5vw;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  background-color: #cecdca;
  color: #343a40;
  cursor: pointer;
}

.congcu1:hover {
  background-color: #343a40;
  color: #f8f9fa;
}

    .story {
      height: 8.8vw; 
      margin-top:1%;
      background-color:#cecdca;
    }
    .circle {
  height: 7vw;
  width: 7vw;
  background-color:none;
  border-radius: 50%;
  display: inline-block;
  margin-top:0.8%;
  margin-left:6%;
  border:2px solid white;
  box-shadow: 0 0 0 0.7px dimgray;
}
.suatieusu {
  width: 50vw; 
  height:30vw;
  margin-top:10vw; 
  margin-left:30vw;
  padding: 20px;
  background-color:gray;
  text-align: center;
}
.modal {
  display: none; 
  position: fixed;
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
}


.close {
  color: #aaa;
  float: right; 
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

input[type=text] {
  width: 90%;
  height: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
.bia2 {
    position: relative;
}

.ccbia {
    position: absolute;
    bottom: 3%;
    right: 1%;
    padding: 10px;
    height:10%;
    width:10%;
    background-color:darkgray;
    font-size:1.2vw;
    border-radius: 5px;
    cursor: pointer;
    border:none;
}
.ccbia1 {
    position: absolute;
    bottom: 3%;
    right: 10%;
    padding: 10px;
    height:10%;
    width:5%;
    background-color:darkgray;
    font-size:1.2vw;
    border-radius: 5px;
    border:none;
    cursor: pointer;
}

.ccbia:hover {
  background-color: #343a40;
  color: #f8f9fa;
}
.ccbia1:hover {
  background-color: #343a40;
  color: #f8f9fa;
}
 form {
  margin-top:-5%;
  height:3.5vw;
  margin-left: 5%;
 }
 input {
  margin-left: 25%;
  border:none;
 }
 .icon {
  font-size:1.5vw;
  transform: translate(310%, -70%);
  color:white;
  cursor: pointer;
 }
    @media (max-width: 660px) {

    .bia {
        height:38%;
        width:100%; 
        margin:0;
        position: relative;
    }
    .bia1  {
        width: 100%;
        margin-top:8%;
        border-radius:0;
    }
    .anhdaidien {
        position: static;
        height: 100%;
        width: 100%;
        position: absolute;
        background-color:none;
      }
    .khungcanhan {
        position: sticky; 
        top: 540px; 
        left: 32%;
        background:none;
        transform: translate(25%, -80%);
        background: 
    }
    .canhan1 {
      border-radius:50%;
    }
    .congcu {
  display: flex;
  justify-content: space-around;
}

.congcu1 {
  font-size: 3vw;
  padding: 1vw 17vw;
  border-radius: 5px;
  background-color: #cecdca;
  cursor: pointer;
  height:8vw;
  margin-left:5vw;
  margin-top:8vw;
  white-space: nowrap;
}
 
.congcu1:hover {
  background-color: #343a40;
  color: #f8f9fa;
}

    .name {
      height:45% ;
      text-align:center;
      font-family:Helvetica, Arial,sans-serif;
      font-size: 5.2vw;
      margin-top:10%;
    }
    .tieusu {
      height:50%;
      font-size:3.5vw;
      width: 200%;
      margin-left:-50%;
    }
    .banbe {
      height:25%;
      top:0%;
      font-size:3vw;
      color:dimgray;
      margin-top:-10%;
    }
    .story {
      height: 15vw; 
      margin-top:60%;
      background-color:#cecdca;
    }
    .circle {
  height: 12vw;
  width: 12vw;
  background-color:none;
  border-radius: 50%;
  display: inline-block;
  margin-top:1.9%;
  margin-left:0.4vw;
  border:1.5px solid white;
  box-shadow: 0 0 0 0.7px dimgray;
  
}
.icon {
  font-size:4.5vw;
  transform: translate(250%, -160%);
  color:white;
  cursor: pointer;

 }
 form {
  width:45vw;
  margin-top:13%;
  height:9vw;
  margin-left: 10%;
 }
 .ccbia {
    position: absolute;
    bottom: -15%;
    height:10%;
    width:12%;
    background-color:darkgray;
    font-size:1.7vw;
    cursor: pointer;
    border:none;
}
.ccbia1 {
    position: absolute;
    bottom:-15%;
    right: 12%;
    height:10%;
    width:7%;
    background-color:darkgray;
    font-size:1.7vw;
    align:center;
    border:none;
    cursor: pointer;
}
 }

    
</style>
<body>
<div style="height:10%; position: fixed;top: 0;width: 100%;background-color:#cecdca; width:100%;z-index:2"> </div>
<div class="bia">
  <div class="bia1">
   <div class="bia2">
    <img src="../img/<?php echo $row["ANHBIA"]; ?>" style="width:100%; height:100%;border-radius:5px">
   </div>

   <button class="ccbia" onclick="showFilePicker()">Chỉnh sửa</button>
<form action="suabia.php" method="post" enctype="multipart/form-data">
    <input type="file" id="filePicker" name="anhbia" style="display:none;" onchange="filePicked()" />
    <input type="submit" value="Lưu" style="visibility:hidden;" id="saveButton">
</form>

<script>
function showFilePicker() {
    document.getElementById('filePicker').click();
}

function filePicked() {
    var input = document.getElementById('filePicker');
    if (input.files && input.files[0]) {
        console.log('Tệp đã chọn:', input.files[0].name);
    }
    document.getElementById('saveButton').click();
}
</script>

   <a onclick="return confirm('Bạn có chắc chắn muốn xóa ảnh bìa?')" href="xoabia.php">
   <button class="ccbia1" >Xóa</button>
   </a>

  </div>
  <div class="khungcanhan">
    <div class="canhan1">
      <div class="anhdaidien">
<img src="../img/<?php echo $row["ANHDAIDIEN"]; ?>" style="width:100%; height:100%; border-radius: 50%;">

<form action="avartar.php" method="post" enctype="multipart/form-data" id="uploadForm">
    <i class="icon fa fa-camera" onclick="avartar()" ></i>
    <input type="file" id="avatarPicker" name="anhdaidien" style="display:none;" onchange="avatarPicked()" />
    <input type="submit" value="Lưu" style="visibility:hidden;" id="avatarSaveButton">
</form>

<script>

function avartar() {
    document.getElementById('avatarPicker').click();
}
function avatarPicked() {
    var input = document.getElementById('avatarPicker');
    if (input.files && input.files[0]) {
        console.log('Tệp đã chọn:', input.files[0].name);
        document.getElementById('avatarSaveButton').click();
    }
}
</script>

      </div>
    </div>
    <div class="name">
      <div><strong><?php echo $row["USERNAME"] ?></strong></div>
      <div class="banbe"><br>2939 bạn bè </div>
      <div class="tieusu"><br>  <?php echo $row["TIEUSU"]  ?> </div>
    </div>
    <div class="congcu">
    <button class="congcu1" id="editButton" onclick="FormTIEUSU()">Chỉnh sửa</button>

<div id="inputForm" class="hidden">
    <form action="suatieusu.php" method="post">
        <input type="text" value="<?php echo $row['TIEUSU']?>" name="tieusu" placeholder="Nhập tiểu sử của bạn">
        <input type="submit" value="Lưu">
        <button style="border:none;" type="button" onclick="cancelEdit()">Hủy</button>
    </form>
</div>

<script>
function FormTIEUSU() {
    var form = document.getElementById("inputForm");
    var button = document.getElementById("editButton");
    form.style.display = "block";
    button.style.display = "none";
}

function cancelEdit() {
    var form = document.getElementById("inputForm");
    var button = document.getElementById("editButton");
    form.style.display = "none";
    button.style.display = "block";
}
</script>

     <a onclick="return confirm('Bạn có chắc chắn muốn xóa tiểu sử?')" href="xoatieusu.php">
      <button class="congcu1">Xóa</button>
     </a>
    </div>
  </div>
</div>
<div class="story">

</div>
</div>