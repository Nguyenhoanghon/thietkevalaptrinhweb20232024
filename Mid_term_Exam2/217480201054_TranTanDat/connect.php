<?php 
    $servername = "localhost";
    $username = "root";
    $pass = "";
    $dataname = "hoithao";

    $conn = mysqli_connect($servername, $username, $pass, $dataname);

    if(!$conn){
        die ("ket noi that bai: ". mysqli_connect_error());
    }
    else{
        echo "ket noi thanh cong...";
    }


?>