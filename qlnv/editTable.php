<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="./images/logoD.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link  href=" https://use.fontawesome.com/releases/v5.0.4/css/all.css " rel="stylesheet">     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<style>

.table{
 padding-left: 120px;
}
.text-center{
  padding:20px;
  font-family: 'Lobster';
  text-align: center;
}
.boder{
  width: 300px;
  height: 50px;  
  margin: 20px;
  border: 2px solid;
  border-radius: 5px;
  border-style: dotted solid;
}
.boders{
  width: 300px;
  height: 50px;
  margin: 20px;
  border-radius: 5px;
  border: 2px solid;
  border-style: dotted solid;
}
center{
  padding:50px;
}
button{
  font-family: 'Lobster';
  border: 0px;
  width: 150px;
  height: 50px;
  background-color: rgba(28, 235, 21, 0.9);
}

button:hover{
  background-color:orange;
}
</style>
<body>
<?php
		$phone=$_REQUEST['fphone'];
			$db=mysqli_connect('localhost','root','','demo_db');
			if(!$db){
			
				echo "Lỗi kết nối";
			}else{
			
				$sql_read="select * from t_khachhang where fphone='".$phone."'";
				$kq=mysqli_query($db,$sql_read);
				if(mysqli_num_rows($kq)>0){
				
					while ($r=mysqli_fetch_array($kq)){					
                        $name=$r['fname'];
                        $email=$r['femail'];
                        $phone=$r['fphone'];
                        $table=$r['fproject'];
                        $date=$r['fpartners'];
                        $time=$r['ftime'];
                       
					}
				}

			}
	?>
<div id="set-table">
	  
        <div class="table">
          <h1 class="text-center">Đặt bàn</h1>
          <h5 class="text-center">Vui lòng điền đủ thông tin để đặt bàn</h5>
          <form action="updateTable.php" method="POST" class="table-form" id="sub-table">
             <input type="text" placeholder="Họ và tên" name="fname" class="boder"  id="sub-table"  value="<?php echo $name;?>">
             <input type="text" placeholder="Email" name="femail" class="boder"  id="sub-table"  value="<?php echo $email;?>">
             <input type="text" placeholder="Số điện thoại" name="fphone" class="boder"  id="sub-table"  value="<?php echo $phone;?>">
             <select  class="boders" name="fproject"   id="sub-table" value="<?php echo $project;?>">
              <option value="Chọn loại bàn"  >Các dự án</option>
              <option value="Phần mềm" <?php if($project=='Phần mềm'){echo 'selected="selected"';}?>>Phần mềm</option>
              <option value="Mạng" <?php if($project=='Mạng'){echo 'selected="selected"';}?>>Mạng</option>
              <option value="game" <?php if($project=='game'){echo 'selected="selected"';}?>>game</option>
              <option value="Đồ họa" <?php if($project=='Đồ họa'){echo 'selected="selected"';}?>>Đồ họa</option>
              <option value="film" <?php if($project=='film'){echo 'selected="selected"';}?>>film</option>
              <option value="Nghệ thuật" <?php if($project=='Nghệ thuật'){echo 'selected="selected"';}?>>Nghệ thuật</option>
              <option value="Bảo mật" <?php if($project=='Bảo mật'){echo 'selected="selected"';}?>>Bảo mật</option>
             </select>
             <input type="text" placeholder="Đối tác" name="fpartners" class="boder"  id="sub-table"  value="<?php echo $partners;?>">
             <input type="time" name="ftime" class="boder"  id="sub-table"  value="<?php echo $time;?>">
             <center><button type="submit" class="click" id="settable" onclick="alert('Bạn chắc chứ?')">Đặt bàn</button></center>            
          
          </form>
          
        </div>
	  </div>
	  
</body>
</html>