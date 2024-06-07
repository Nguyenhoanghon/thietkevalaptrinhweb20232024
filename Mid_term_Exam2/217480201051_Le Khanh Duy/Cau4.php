<?php
    $username="student";
    $password="";
    $servername="localhost";
    $database="hoithao.sql";
    $connect = mysqli_connect($servername,$username,$password,$database);

    if(!$connect){
        die("Khong ket noi:" . mysqli_connect_error());
        exit();
    }

    $madetai="";
    $tendetai="";
    $kinhphi="";
    $mahn="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["Mdt"])){
            $madetai=$_POST['Mdt'];
        }
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["Tdt"])){
            $tendetai=$_POST['Tdt'];
        }
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["Kp"])){
            $kinhphi=$_POST['Kp'];
        }
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["Mhn"])){
            $mahn=$_POST['Mhn'];
        }
    }

    $sql = "INSERT INTO dsdetai (madetai, tendetai, kinhphi, `mahn`)
    VALUES('$madetai','$tendetai','$kinhphi','$mahn')";
    if(mysqli_query($connect,$sql)){
        echo "Them du lieu thanh cong";
    }else{
        echo "Error:" .$sql. "<br>".mysqli_error($connect);
    }

    mysqli_close($connect);
?>