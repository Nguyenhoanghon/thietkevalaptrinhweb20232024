<?php
    require("Conection.php");
    $mahn = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtMaHoiNghi"])) {
            $mahn = $_POST['txtMaHoiNghi'];
        }
        $sql = "SELECT * FROM `dsdetai` WHERE `MAHN` = '$mahn'";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_array($result)) {
                    echo $row['MADETAI'];
                    echo "|";
                    echo $row['TENDETAI'];
                    echo "|";
                    echo $row['KINHPHI'];
                    echo "|";
                    echo $row['MAHN'];
                    echo "<br>";
                }
                mysqli_free_result($result);
            }
            else {
                echo "No Records";
            }
        }
    }
    mysqli_close($conn);
?>