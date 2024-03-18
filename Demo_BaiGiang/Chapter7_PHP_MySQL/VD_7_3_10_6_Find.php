<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.3.10_1</title>
</head>
<body>
<?php
require "ConnectDB.php";
//Thực hiện câu lệnh SELECT
$makh = "";
if (isset($_POST['submit'])) {
    $makh = $_POST['makh'];
}
$sql = "SELECT * FROM khachhang WHERE makh = '$makh'";
if ($result = mysqli_query($conn, $sql)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo $row['makh'] . "---";
            echo $row['tenkh'] . "---";
            echo $row['namsinh'] . "---";
            echo $row['dienthoai'] . "---";
            echo $row['diachi'] . "<br>";
        }
        //Giải phóng bộ nhớ của biến
        mysqli_free_result($result);
    } else {
        echo "Không có mã khách hàng: " . $makh;
    }
} else {
    echo "Truy vấn thất bại" . mysqli_error($link);
}
//Đóng kết nối
mysqli_close($conn);
?>
</body>
</html>