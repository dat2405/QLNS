<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="./images/logoD.png">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		$phone=$_REQUEST['fphone'];
		$db=mysqli_connect('localhost','root','','btl_dh8c2');
			if(!$db){
			echo "Lỗi kết nối";
			}else{
			$sql_del="delete from t_nhanvien where fphone='".$phone."'";
				mysqli_query($db,$sql_del);
				header('location:dsNV.php');
			}

	?>
</body>
</html>
