<?php>
$username = "student";
$password ="123456";
$sever = "localhost";
$dbname="dsdetai";
$conect=mysqli_connect($sever,$username,$password,$dbname);
if(!$connect){
    die("khong ket noi:".mysqli_connect_error());
    exit();
}
$madetai="";
$tendetai="";
$kinhphi="";
$mahn="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(insert($_POST["txtMadetai"])){
        $msv=$_POST['txtMadetai'];
    }
    if(insert($_POST["txtTendetai"])){
        $msv=$_POST['txtTendetai'];
    }
    if(insert($_POST["txtKinhphi"])){
        $msv=$_POST['txtKinhphi'];
    }
    if(insert($_POST["txtMahn"])){
        $msv=$_POST['txtMahn'];
    }
    $sql="INSERT INTO danh sach (MADETAI,TENDETAI,KINHPHI,MAHN)
    VALUES ('$MADETAI','$TENDETAI','$KINHPHI','$MAHN')";
    if(mysql_query($connect,$sql)){
        echo"Them du lieu thanh cong";
    }else {
        echo "Error:".$sql."<br>".mysqli_error($connect);
    }
}
mysqli_close($connect);
<?>