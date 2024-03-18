<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.3.10_5</title>
</head>
<body>
<?php
require "ConnectDB.php";
$makh = "";
if (isset($_POST['submit'])) {
//Khai bai bien nhan gia tri tu form
    $makh = $_POST['makh'];
    $tenkh = $_POST['tenkh'];
    $namsinh = $_POST['namsinh'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
}

//echo "$makh $tenkh";

//$sql = "DELETE FROM khachhang where makh = 'K001'";
$sql = "DELETE FROM khachhang where makh = '$makh'";
echo $sql;
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Xóa thành công";
} else {
    echo "Xóa thất bại";
}
?>

</body>
</html>
