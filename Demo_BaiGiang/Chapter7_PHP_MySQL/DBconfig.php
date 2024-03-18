<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConfigBD</title>
</head>
<body>
    <?php
echo "DB config";

$hostName = "localhost";
$userName = "root";
$password = "";

$conn = mysqli_connect($hostName, $userName, $password);
$strCreateDB = "CREATE DATABASE abc";
if (mysqli_query($conn, $strCreateDB)) {
    echo "Create DB success <br>";
} else {
    echo "Create DB fail";
}
//Create Table CONG_NHAN
$strCreateTable_CONG_NHAN = "CREATE TABLE `abc`.`CONG_NHAN` (
    `MaCN` VARCHAR(10) NOT NULL ,
    `HoTen` VARCHAR(50) NOT NULL ,
    `PX` int NOT NULL ,
    PRIMARY KEY (`MaCN`)) ENGINE = InnoDB;";

if (mysqli_query($conn, $strCreateTable_CONG_NHAN)) {
    echo "Create Table " . $strCreateTable_CONG_NHAN . "Success <br>";
} else {
    echo "Create Table " . $strCreateTable_CONG_NHAN . "Fail <br>";
}
//Create Table
$strCreateTable_SAN_PHAM = "CREATE TABLE `abc`.`SAN_PHAM` (
    `MaSP` VARCHAR(10) NOT NULL ,
    `TenSP` VARCHAR(50) NOT NULL ,
    `DonGia` int NOT NULL ,
    PRIMARY KEY (`MaSP`)) ENGINE = InnoDB;";
if (mysqli_query($conn, $strCreateTable_SAN_PHAM)) {
    echo "Create Table " . $strCreateTable_SAN_PHAM . "Success <br>";
} else {
    echo "Create Table " . $strCreateTable_SAN_PHAM . "Fail <br>";
}

mysqli_close();
?>
</body>
</html>