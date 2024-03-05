<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_MySQL</title>
</head>
<body>
<?php
$servername = "localhost";
$database = "quanlybanhang";
$username = "root";
$password = "";
//Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "fail!!";
} else {
    echo "Connected successfully";
}

mysqli_close($conn);
?>
</body>
</html>