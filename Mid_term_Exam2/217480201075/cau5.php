<?php
include "connect.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $mahn = $_POST['mahn'];


    $sql ="SELECT * FROM dsdetai WHERE MAHN ='$mahn'";
    $RESULT = $conn->query($sql);
    if($RESULT->num_rows > 0){
        echo'<table border = 1>';
        echo'<tr>';
        echo '<th> MADETAI</th>';
        echo '<th> TENDETAI</th>';
        echo '<th> KINHPHI</th>';
        echo '<th> MAKH</th>';
        echo '</tr>';
        while ($row = $RESULT->fetch_assoc()){
            echo '<tr>';
            echo '<td>' . $row['MADETAI']. '</td>';
            echo '<td>' . $row['TENDETAI']. '</td>';
            echo '<td>' . $row['KINHPHI']. '</td>';
            echo '<td>' . $row['MAHN']. '</td>';

            echo '</tr>';
        }
        echo '</table>';

    }else
    {
        echo"không tìm thấy khách hàng.";
    }
    
    $conn->close();
}
?>