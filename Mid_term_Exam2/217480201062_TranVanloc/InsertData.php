<?php
$username="student";
$password="123456"
$server="localhost"
$dbname="hoinghi.sql"


$connet= mysqli_connet($server, $username,$password,$dbname,$talename);
if(!$connet){
    die("Khong ket noi;". mysqli_connet_error());
    exit();
}
$MADETAI="";
$TENDETAI="";
$KINHPHI="";
$MAHN="";

IF($_SERVER["REQUEST_MENTHOD"]=="POST"){
    if(isset($_POST[txtMadetai])){
        $MADETAI=$_POST['txtMadetai'];
    }
IF($_SERVER["REQUEST_MENTHOD"]=="POST"){
    if(isset($_POST[txtTendetai])){
        $MADETAI=$_POST['txtTendetai'];
    }
IF($_SERVER["REQUEST_MENTHOD"]=="POST"){
    if(isset($_POST[txtKinhphi])){
        $MADETAI=$_POST['txtKinhphi'];
    }
IF($_SERVER["REQUEST_MENTHOD"]=="POST"){
    if(isset($_POST[txtMAHN])){
        $MADETAI=$_POST['txtMAHN'];
    }
$sql= " INSERT INTO danhsach (Madetai, Tendetai, Kinhphi, MAHN)
VALUES ('$Madetai', '$Tendetai', '$Kinhphi', '$MAHN')";
IF(mysqli_query($connet,$sql)){
    echo"Them du lieu thanh cong";
}else{
        echo"Error:".$sql."<br>".mysqli_error($connet);
}
}
mysqli_close($connet);
?>