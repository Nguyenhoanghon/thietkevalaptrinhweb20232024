<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process inputdata</title>
</head>
<body>
    <?php
// Nếu kết nối bị lỗi thì xuất báo lỗi và thoát.
//connect BD
$username = "root";
$password = "";
$server = "localhost";
$dbname = "quanlybanhang";
$connect = mysqli_connect($server, $username, $password, $dbname);
if (!$connect) {
    die("Không kết nối :" . mysqli_connect_error());exit();
} else {
    echo "Connect DB Success!";
}

if (isset($_POST['submit'])) {
//Khai bai bien nhan gia tri tu form
    $makh = $_POST['makh'];
    $tenkh = $_POST['tenkh'];
    $namsinh = $_POST['namsinh'];
    $sodienthoai = $_POST['dienthoai'];
    $diachi = $_POST['diachi'];
    echo "$makh $tenkh";
//Khai bao truy van insert
    $sql = "INSERT INTO `khachhang` (`makh`, `tenkh`, `namsinh`, `dienthoai`, `diachi`)
VALUES ('$makh', '$tenkh', '$namsinh', '$sodienthoai', '$diachi')";

//$result = mysqli_query($connect, $sql_insert);
    if (mysqli_query($connect, $sql)) {
        echo "Insert Successfull";
    } else {
        echo "Insert fail!!!";
    }

}
?>
</body>
</html>