<?php
    $servername = "localhost";
    $database = "hoithao";
    $usernamee = "root";
    $password = "";
    $conn = mysqli_connect($servername, $usernamee, $password, $database);
    if(!$conn) {
        die ("Connection failed: ".mysqli_error());
    }
?>