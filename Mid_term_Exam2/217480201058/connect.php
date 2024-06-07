<?php
    $servername = "localhost";
    $database = "hoithao.spl";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $database, $password);
    if(!$conn){
        die("connection failed: ".mysqli_connect_error());
    }
    echo "ket noi thanh cong"
?>