<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database ="hoithao";


    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connect Failed: ". mysqli_connect_error());
    }
?>