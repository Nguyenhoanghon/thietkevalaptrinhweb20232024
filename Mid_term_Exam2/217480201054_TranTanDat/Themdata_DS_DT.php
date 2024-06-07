



<?php 
    include "connect.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        // $madetai = isset($_POST['txt_Madeta']) ? mysqli_read_escape_string($conn, $_POST['txt_Madeta']): '';
        // $tendetai = isset($_POST['txt_tendetai']) ? mysqli_read_escape_string($conn, $_POST['txt_tendetai']): '';
        // $kinhphi = isset($_POST['txt_kinhphi']) ? mysqli_read_escape_string($conn, $_POST['txt_kinhphi']): '';
        // $mahoinghi = isset($_POST['txt_Mahoinghi']) ? mysqli_read_escape_string($conn, $_POST['txt_Mahoinghi']): '';

        if(isset($_POST['txt_Madeta'])){
            $madetai = $_POST['txt_Madeta'];
        }

        if(isset($_POST['txt_tendetai'])){
            $tendetai = $_POST['txt_tendetai'];
        }

       

        if(isset($_POST['txt_kinhphi'])){
            $kinhphi = $_POST['txt_kinhphi'];
        }

        if(isset($_POST['txt_Mahoinghi'])){
            $mahoinghi = $_POST['txt_Mahoinghi'];
        }


        if(!empty( $madetai) && !empty($tendetai) &&  !empty($kinhphi) && !empty($mahoinghi)){
            $sql = "INSERT INTO dsdetai(MADETAI, TENDETAI, KINHPHI, MAHN) VALUE('$madetai', '$tendetai', '  $kinhphi', ' $mahoinghi') ";

            if(mysqli_query($conn, $sql)){
                echo "them thanh cong,...";
            }
            else{
                echo "them that bai <br>" .mysqli_error($conn);
            }
        
        }
        else{
            echo "vui long nhap day du thong tin";
        }

    }
    mysqli_close($conn);



?>