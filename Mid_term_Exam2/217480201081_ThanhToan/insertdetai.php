<?php
    $servername = "localhost";
    $username = "root";
    $database = "hoithao";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed");
        exit();
    };

    $madetai = "";
    $tendetai = "";
    $kinhphi = "";
    $mahn = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["txtmadetai"])) {
            $madetai = $_POST['txtmadetai'];
        }

        if(isset($_POST['txttendetai'])) {
            $tendetai = $_POST['txttendetai'];
        }
    
        if(isset($_POST['txtkinhphi'])) {
            $kinhphi = $_POST['txtkinhphi'];
        }
    
        if(isset($_POST['txtmahn'])) {
            $mahn = $_POST['txtmahn'];
        }
    
        $sql = "INSERT INTO DSDETAI (madetai,tendetai,kinhphi,mahn) VALUES ('$madetai','$tendetai','$kinhphi','$mahn')";
        if(mysqli_query($conn, $sql)) {
            echo "Them thanh cong";
        }
        else {
            echo "Error: ".$sql ."<br>".mysqli_error($conn);
        }
    }

    mysqli_close($conn);

    
?>