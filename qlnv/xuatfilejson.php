<!DOCTYPE html>
<html lang="VN">
    <head>
        <title>File JSON</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
    </head>
<?php
    //  $db=mysqli_connect('localhost','root','','btl_dh8c2');

    //  $sql_hienthi="select * from t_nhanvien";
    //  $kq=mysqli_query($db,$sql_hienthi);

    //  $data = file_get_contents($kq);
    //  $array = json_decode($data,JSON_UNESCAPED_UNICODE);

    //  echo "<pre>";
    //  print_r($array);
    //  echo "</pre>";

$url = "127.0.0.1";
$database = "btl_dh8c2";
$username = "root";
$password = "";

$conn = mysqli_connect($url ,$username ,$password,$database);
if(!$conn){
    die("connection failed: ".$conn-->connect_error);
}
$sql = "SELECT * FROM t_nhanvien";
$result = mysqli_query($conn,$sql);
$rows = array();

if(mysqli_num_rows($result) > 0){
    while($r = mysqli_fetch_array($result)){
        array_push($rows,$r);
    }
echo "<pre>";
    print json_encode($rows,JSON_PRETTY_PRINT);
    echo "</pre>";
}else{
    echo "No data";
}
mysqli_close($conn);

?>
</html>
