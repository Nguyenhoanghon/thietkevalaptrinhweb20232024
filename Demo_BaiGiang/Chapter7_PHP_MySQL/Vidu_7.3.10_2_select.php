<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7.3.10_2</title>
</head>
<body>
<?php
require "ConnectDB.php";
$sql = "SELECT * FROM khachhang";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "Mã KH: " . $row['makh'] . ", Họ tên: " . $row['tenkh'] . $row['dienthoai'] . "<br/>";
}
mysql_free_result($result);
mysql_close();
?>
</body>
</html>