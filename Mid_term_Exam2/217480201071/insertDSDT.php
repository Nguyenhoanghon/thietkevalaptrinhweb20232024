<?php
    require("Conection.php");
    $madetai = "";
    $tendetai = "";
    $kinhphi = "";
    $mahn = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtMaDeTai"])) {
            $madetai = $_POST['txtMaDeTai'];
        }
        if(isset($_POST["txtTenDeTai"])) {
            $tendetai = $_POST['txtTenDeTai'];
        }
        if(isset($_POST["txtKinhPhi"])) {
            $kinhphi = $_POST['txtKinhPhi'];
        }
        if(isset($_POST["txtMaHoiNghi"])) {
            $mahn = $_POST['txtMaHoiNghi'];
        }
        $sql = "INSERT INTO `dsdetai`(`MADETAI`, `TENDETAI`, `KINHPHI`, `MAHN`) VALUES ('$madetai','$tendetai','$kinhphi','$mahn')";
        if (mysqli_query($conn, $sql)){
            echo"Thêm dữ liệu thành công";
        } else {
            echo "Eror:".$sql."<br>".mysqli_error();
        }
    }
    mysqli_close($conn);
?>