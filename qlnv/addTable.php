<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
    

    if (isset($_POST['click']))
    {
        $db=mysqli_connect('localhost','root','','btl_dh8c2');  
//Lấy dữ liệu nhập vào
       $name=$_POST['fname'];
        $email=$_POST['femail'];
        $phone=$_POST['fphone'];
        $project=$_POST['fproject'];
        $partners=$_POST['fpartners'];
        $time=$_POST['ftime'];

        if (!$name || !$email || !$phone|| !$project || !$partners || !$time) {
            echo "Vui lòng nhập đầy đủ thông tin!";
            exit();
        }
        if (!empty($name && $email && $phone && $project && $partners  && $time)) {
            echo "Hợp tác thành công!";
            $sql_them="insert into t_khachhang value('".$name."','".$email."','".$phone."','".$project."','".$partners."','".$time."')";
              mysqli_query($db,$sql_them);
            header('location:listTable.php');

        }

    }
    ?>
</body>
</html>