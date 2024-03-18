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
$makh = "";
$tenkh = "";
$namsinh = "";
$sodienthoai = "";
$diachi = "";
if (isset($_POST['submit'])) {
//Khai bai bien nhan gia tri tu form
    $makh = $_POST['makh'];
    $tenkh = $_POST['tenkh'];
    $namsinh = $_POST['namsinh'];
    $dienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
    echo "$makh $sodienthoai";
}
//$sql = "UPDATE khachhang SET dienthoai = '0856999999' WHERE makh = 'K001'";
$sql = "UPDATE khachhang SET dienthoai = '$dienthoai' WHERE makh = '$makh'";
$result = mysqli_query($conn, $sql);
if (mysqli_query($conn, $sql)) {
    echo "Cập nhật thành công";
} else {
    echo "Cập nhật thất bại";
}
//test Function mysql_affected_row()
echo "<h1>Test function mysqli -> affected_row() </h1>";
echo $mysqli->affected_rows;
printf("Affected rows (INSERT):\n", $mysqli->affected_rows);
?>

</body>
</html>
