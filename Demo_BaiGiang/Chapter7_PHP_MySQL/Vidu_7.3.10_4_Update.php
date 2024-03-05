<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.3.10_4</title>
</head>
<body>
<?php
require "ConnectDB.php";
echo "UPdate";
/* $makh = "";
$tenkh = "";
$namsinh = "";
$sodienthoai = "";
$diachi = "";
if (isset($_POST['submit'])) {
//Khai bai bien nhan gia tri tu form
$makh = $_POST['makh'];
$tenkh = $_POST['tenkh'];
$namsinh = $_POST['namsinh'];
$sodienthoai = $_POST['dienthoai'];
$diachi = $_POST['diachi'];
echo "$makh $sodienthoai";
}
 */
$sql = "UPDATE khachhang SET dienthoai = '0856999999' WHERE makh = 'K001'";
//$sql = "UPDATE khachhang SET dienthoai = '$sodienthoai' WHERE makh = '$makh'";
$result = mysqli_query($con, $sql);
if (mysqli_query($con, $sql)) {
    echo "Cập nhật thành công";
} else {
    echo "Cập nhật thất bại";
}

?>

</body>
</html>
