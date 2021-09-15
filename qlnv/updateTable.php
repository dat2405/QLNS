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
		$db=mysqli_connect('localhost','root','','btl_dh8c2');
			if(!$db)
			{
				echo "Lỗi kết nối";
			}
			else
			{
				$name=$_POST['fname'];
                $email=$_POST['femail'];
                $phone=$_POST['fphone'];
                $table=$_POST['fproject'];
                $date=$_POST['fpartners'];
                $time=$_POST['ftime'];
        
        

				$sql_update="update t_khachhang set fname='".$name."',femail='".$email."',fphone='".$phone."',fproject='".$project."',fpartners='".$partners."',ftime='".$time."'where fphone='".$phone."'";
				mysqli_query($db,$sql_update);
				header('location:listTable.php');
            }
	?>
</body>
</html>