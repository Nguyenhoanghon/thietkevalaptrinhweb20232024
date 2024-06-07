



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

        if(!empty( $madetai)){
            $sql = "SELECT * 
            FROM `dsdetai` INNER JOIN `dshoinghi` ON `dsdetai`.`MAHN`== `dshoinghi`.`MAHN`
            WHERE `dsdetai`.`MAHN`= '$madetai' ";
            $result = mysqli_query($conn, $sql){
                if(mysqli_num_rows($result) > 0){
                    foreach($result as $rows){
                        echo "{$rows['MADETAI']}";
                        echo "{$rows['TENDETAI']}";
                        echo "{$rows['KINHPHI']}";
                        echo "{$rows['MAHN']}";

                    }
                }
            }

            if(mysqli_query($conn, $sql)){
                echo "them thanh cong,...";
            }
            else{
                echo "them that bai" .mysqli_error($conn);
            }
        
        }
        else{
            echo "vui long nhap day du thong tin";
        }

    }
    mysqli_close($conn);



?>