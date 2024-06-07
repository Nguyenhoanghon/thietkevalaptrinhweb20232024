<?php
$servername = "localhost";
$database = "quanlyhoithao";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("connect failed: ".mysqli_connect_error());
}
echo "Connected successfully!";
echo "<br>";
$mahn = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["txtmahn"])) {
        $mahn = $_POST["txtmahn"];
    }
    $sql = "SELECT * FROM dsdetai WHERE mahn = '$mahn'";
    if($result = mysqli_query($conn, $sql)){
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_array($result)){
                echo $row['MAHN'];
                echo $row['TENDETAI']."<BR>";
            }
            mysqli_free_result($result);
        }
        else{
            echo "No records";
        }
    }
}
?>