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

$sql = "DELETE FROM khachhang where makh = 'K013'";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Xóa thành công";
} else {
    echo "Xóa thất bại";
}
?>

</body>
</html>
