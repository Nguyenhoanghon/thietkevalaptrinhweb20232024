<?php
    $username = "root";
    $password = "";
    $server ="localhost";
    $dbname ="hoithao";

    $connect =mysqli_connect($server,$username,$password,$dbname);
    if(!$connect){
        die("không kết nối được:".mysqli_connect_error());
        exit();
    }

    $MADETAI ="";
    $TENDETAI ="";
    $KINHPHI ="";
    $MAHN ="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["Madetai"])){
            $MADETAI = $_POST['Madetai'];
        }
        if(isset($_POST["Tendetai"])){
            $TENDETAI = $_POST['Tendetai'];
        }
        if(isset($_POST["Kinhphi"])){
            $KINHPHI = $_POST['Kinhphi'];
        }
        if(isset($_POST["Mahoinghi"])){
            $MAHN = $_POST['Mahoinghi'];
        }
        $sql = "INSERT INTO dsdetai VALUES ('$MADETAI','$TENDETAI','$KINHPHI','$MAHN')";
        if(mysqli_query($connect,$sql)){
            echo"Thêm dữ liệu thành công";
        }else{
            echo "error:".$sql."<br>".mysqli_error($connect);
        }
    }
    mysqli_close($connect);
?>