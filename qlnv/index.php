<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../css/dangnhap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add</title>
     <style tyle="text/css">

body{
  width: 100vw;
  height: 100vh;
  background: url('../images/vp.jpg') ;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  background-size: cover;
}
.DangNhap {
    float: right;
}

   
      input[type=password] {
    
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    width: 400px;
  }
  input[type=reset] {
    width: 150px;
    background-color: #14ade9;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: #1e88c5;
}

    </style>
</head>
<body>
    
              
    </div>
    <br><br>
 
    <div class="center">
    
        <form action='index.php' class="dangnhap" method='POST'>

          <h1 align="center">Đăng nhập</h1>

          <label for="fname">Tên đăng nhập:</label>
          <input type="text" name="username" placeholder="Nhập tên">
          <label for="fpass">Mật khẩu:</label>
          <input type="password" name="password" placeholder="Nhập mật khẩu"><br>
          <table align="center">
           <center><input type='submit' class="button" name="dangnhap" value='Đăng nhập'> &nbsp;&nbsp;&nbsp;
           <input type="reset" class="button" name="dangnhap" value="Nhập lại"></center>
          </table>
          <?php require "xldangnhap.php"; ?>
        </form>
    </div>
</body>
</html>