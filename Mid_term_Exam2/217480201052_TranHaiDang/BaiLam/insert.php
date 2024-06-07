<?php
    include ("connectDB.php");
    try {
        if(isset($_POST['insert'])) {
            $maDetai = $_POST['maDeTai'];
            $tenDetai = $_POST['tenDeTai'];
            $kinhPhi = (int)$_POST['kinhPhi'];
            $maHoinghi = $_POST['maHN'];
    
            $sql = "INSERT INTO `dsdetai`(`MADETAI`, `TENDETAI`, `KINHPHI`, `MAHN`) VALUES ('$maDetai','$tenDetai','$kinhPhi','$maHoinghi')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "Thêm thành công";
            }  else {
                echo "Thêm thất bại:->" . mysqli_error($conn);
            }

        }
    } catch (Exception){
        echo "Không thể thêm vui lòng kiểm tra lại thông tin";
    }
?>