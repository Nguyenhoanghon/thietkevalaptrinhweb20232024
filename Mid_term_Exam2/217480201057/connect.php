<?php
$servername = "localhost";
$database = "quanlyhoithao";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("connect failed: ".mysqli_connect_error());
}
echo "Connected successfully!";
mysqli_close($conn);
?>