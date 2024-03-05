<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.3.10_3</title>
</head>
<body>
<?php
require "ConnectDB.php";
$sql = "INSERT INTO `khachhang` (`makh`, `tenkh`, `namsinh`, `dienthoai`, `diachi`)
VALUES ('K005', 'Nguyễn Thị Lan', '1980', '0913123456', 'Bạc Liêu'),
('K006', 'Ngô Thanh Minh', '1985', '091324564', 'Vĩnh Lợi');";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Mẫu tin đã được thêm.";
} else {
    echo "Không thêm được";
}
?>
</body>
</html>
