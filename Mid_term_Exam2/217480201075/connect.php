<?php
    $Servername = 'localhost';
    $database = 'hoithao';
    $username ='root';
    $password ='';

    $conn = mysqli_connect($Servername, $username, $password, $database);

    if (!$conn){
        die("connection failed: ". mysqli_connect_error());

    }
    echo "connected successfully";
?>