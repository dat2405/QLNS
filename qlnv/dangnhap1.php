<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="./images/logoD.png">
<link rel="stylesheet" href="../css/dangnhap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add</title>

</head>
<body>
 
    <div class="center">
    
    <form name="" method="POST" action="dangnhap1.php">

<h1 align="center">Thêm nhân viên</h1>

 <label for="fname">Họ tên:</label>
 <input type="text" name="fname" size="10" placeholder="Nhập tên" >

 <label for="fphone">Số điện thoại:</label>
 <input type="text" name="fphone" size="10" placeholder="Nhập sdt" >
 <!--  
 <label for="fdate">Ngày làm việc:</label><br><br>
 <input type="date" name="date" id="" style="width:400px;height:40px;border-radius:4px;border:0px;"><br>--><br>

 <label for="fparttime">Giờ làm việc:</label><br>
 <input type="radio" name="ftime" value="Ca 1:8h-12h">Ca 1:8h-12h<br>
 <input type="radio" name="ftime" value="Ca 2:12h-16h">Ca 2:12h-16h<br>
 <input type="radio" name="ftime" value="Ca 3:16h-19h">Ca 3:16h-19h<br>
 <input type="radio" name="ftime" value="Ca 4:19h-22h">Ca 4:19h-22h<br>
 <input type="radio" name="ftime" value="Fulltime">Fulltime

 <table>
  <center>
   
    <button class= "button"><a href="dsNV.php">Thoát</a></button>
    <input type="submit" value="Thêm nhân viên" name="click"> 
    
  </center>
 </table>
<?php require "xlnhanvien.php"; ?>
</form>
</div>
</body>
</html>