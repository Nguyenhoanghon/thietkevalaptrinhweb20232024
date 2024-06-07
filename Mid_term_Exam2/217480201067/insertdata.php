<?php

$username="root";
$password="";
$server="localhost";
$dbname="hoinghi";

$connect= mysqli_connect($server,$username,$password,$dbname);
if(!$connect){
    die("Không kết nối được:" .mysqli_connect_error());
    exit();
}
$madetai="";
$tendetai="";
$kinhphi="";
$mahoinghi="";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtMdt"])){
        $mdt=$_POST['txtMdt']
    }


    if(isset($_POST["txtTdt"])){
        $mdt=$_POST['txtTdt']
    }


    if(isset($_POST["txtKp"])){
        $mdt=$_POST['txtKp']
    }

    if(isset($_POST["txtMhn"])){
        $mdt=$_POST['txtMhn']
    }

$sql="INSERT INTO `dsdetai`(`MADETAI`, `TENDETAI`, `KINHPHI`, `MAHN`) VALUES ('$madetai','$tendetai','$kinhphi','$mahoinghi')";
if(mysqli_query($connect,$sql)){
    echo"Them de lieu thanh cong";
}else{
    echo"Error:" .mysql."<br>".mysqli_error($connect);
}
}
?>