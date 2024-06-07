<?php
$username="root";
$password="";
$server="localhost";
$dbname=="hoithao.sql";
$connect=mysqli_connect($server,$username,$password,$dbname);
if(!$connect){
    die("Không kết nối:".mysqli_connect_error());
    exit();
}
$MADETAI="";
$TENDETAI="";
$KINHPHI="";
$MAHN="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["txtMADETAI"])){
        $MADETAI=$_POST['txtMADETAI'];
    }
    if(isset($_POST["txtTENDETAI"])){
        $MADETAI=$_POST['txtTENDETAI'];
    }
    if(isset($_POST["txtKINHPHI"])){
        $MADETAI=$_POST['txtKINHPHI'];
    }
    if(isset($_POST["txtMAHN"])){
        $MADETAI=$_POST['txtMAHN'];
    }
    $sql="INSERT INTO dsdetai (MADETAI, TENDETAI, KINHPHI, MAHN)
    VALUES ('$txtMADETAI','$txtTENDETAI','$txtKINHPHI','$txtMAHN')";
    if(mysqli_query($connect,$sql)){
        echo"Thêm dữ liệu thành công";
    }else{
        echo"Error:".$sql."br".mysqli_error($connect);
    }
}
mysqli_close($connect);
?>