<?php
include "connect.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $madetai = $_POST['madetai'];
    $tendetai =$_POST['tendetai'];
    $kinhphi = $_POST['kinhphi'];
    $mahn = $_POST['mahn'];

    $sql ="INSERT INTO dsdetai (MADETAI, TENDETAI, KINHPHI,MAHN) VALUES ('$madetai','$tendetai','$kinhphi','$mahn')";
    if($conn->query($sql)===TRUE){
        echo"Thêm dữ liệu thành công";
    }
    else{
        echo"ERROR" .$sql ."<br>".$conn->error;
    }
    $conn->close();
}
?>