<?php
include "connect.php";

$madetai = $_POST['madetai'];

$sql = "SELECT * FROM MAHN WHERE madetai = '$madetai'";

?>