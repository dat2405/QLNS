<!DOCTYPE html>
<html>
    <head>
        <title>Quản lý</title>
        <meta charset="UTF-8">
        <link rel="icon" href="../images/logoD.png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin_style.css" >
        <script src="../resources/ckeditor/ckeditor.js"></script>
    </head>
    <style tyle="text/css">
body{
  width: 100vw;
  height: 100vh;
  background: url('../images/vp.jpg') ;
  background-position: center;
  background-repeat: no-repeat;
  position: relative;
 
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
    </style>
    <body>

        <?php
        session_start();
          ?>  
            <div id="content-wrapper">
                <div class="container">
                    <div class="left-menu">
                        <div class="menu-heading">Nhân Viên</div>
                        <div class="menu-items">
                            <ul >
                                <li><a href="listTable.php" >Quản lý khách hàng</a></li>
                                <li><a href="">Các doanh nghiệp</a></li>
                                <li><a href="">Doanh thu cá nhân</a></li>   
                                </div>
                               </li> 
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
     
</body>
</html>