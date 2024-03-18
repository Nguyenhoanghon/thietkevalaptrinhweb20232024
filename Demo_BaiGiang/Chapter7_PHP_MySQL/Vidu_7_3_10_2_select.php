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
echo "<h1>Test function mysql_affected_row() </h1>";
$sql = "SELECT * FROM khachhang";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    echo "Mã KH: " . $row['makh'] . ", Họ tên: " . $row['tenkh'] . $row['dienthoai'] . "<br/>";
}

//test Function mysql_affected_row()
echo "<h1>Test function mysql_affected_row() </h1>" . $mysqli_affected_rows($conn);

mysqli_free_result($result);
mysqli_close();
?>
</body>
</html>