<?php
$servername = "localhost";
$database = "hoithao.sql";
$username = "root";

$conn = mysqli_connect($servername, $username, $username,);
if (!$conn){
    die("connection failed: ".mysqli_connect_error() );
}
echo "connected successfully";
mysqli_close($conn);

$MADETAI = "";
$TEMDETAI = "";
$KINHPHI = "";
$MAHN = "";
if ($_SERVER["REQUEST_METHOD"] =="POST"){
    if(isset($_POST["txtMADETAI"])){
        $MADETAI = $_POST['txtMADETAI'];
    }
}

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    if(isset($_POST["txtTENDETAI"])){
        $MADETAI = $_POST['txtTENDETAI'];
    }
}

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    if(isset($_POST["txtKINHPHI"])){
        $MADETAI = $_POST['txtKINHOHI'];
    }
}

if ($_SERVER["REQUEST_METHOD"] =="POST"){
    if(isset($_POST["txtMAHN"])){
        $MADETAI = $_POST['txtMAHN'];
    }
}

mysqli_close($connect);
?>