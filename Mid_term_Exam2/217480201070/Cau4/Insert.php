<?php
    include("connection.php");
    $madt = "";
    $tendt = "";
    $kinhphi = 0;
    $mahn = "";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtMa"]))
            $madt = $_POST["txtMa"];
        if(isset($_POST["txtTen"]))
            $tendt = $_POST["txtTen"];
        if(isset($_POST["txtKinhPhi"]))
            $kinhphi = $_POST["txtKinhPhi"];
        if(isset($_POST["txtMaHN"]))
            $mahn = $_POST["txtMaHN"];
        
        $sql = "insert into dsdetai values('$madt', '$tendt', '$kinhphi', '$mahn')";
        if(mysqli_query($conn, $sql)) {
            echo "Thêm dữ liệu thành công";
        } else {
            echo "Error: " . $sql . "<br>" .mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>