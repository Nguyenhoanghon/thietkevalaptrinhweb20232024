<?php
include "connect.php";
$MADETAI = $_POST['MADETAI'];

$sql = "SELECT * from dsdetai where MADETAI = '$MADETAI'"

$result = $db->query($sql);

if($result->num_rows > 0){
    echo '<table>';
    echo '<tr>';
    echo '<th>'
}
?>