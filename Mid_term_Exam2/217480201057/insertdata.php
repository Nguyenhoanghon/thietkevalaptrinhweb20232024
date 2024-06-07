<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <form action="" method="post">
<center>
        <h1 style="text-align: center;">THEM DU LIEU DSDETAI</h1>
        <input type="text" name="txtmadetai" placeholder="Nhap ma de tai" value=""><br><br>
        <input type="text" name="txttendetai" placeholder="Nhap ten de tai" value=""><br><br>
        <input type="text" name="txtkinhphi" placeholder="Nhap kinh phi" value=""> -->
<?php
$servername = "localhost";
$database = "quanlyhoithao";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);
if(!$conn){
    die("connect failed: ".mysqli_connect_error());
}

$madetai = "";
$tendetai = "";
$kinhphi = "";
$mahn = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["txtmadetai"])) {
        $madetai = $_POST["txtmadetai"];
    }
    if (isset($_POST["txttendetai"])) {
        $tendetai = $_POST["txttendetai"];
    }
    if (isset($_POST["txtkinhphi"])) {
        $kinhphi = $_POST["txtkinhphi"];
    }
    if (isset($_POST["txtmahn"])) {
        $mahn = $_POST["txtmahn"];
    }

    $sql = "INSERT INTO dsdetai (madetai, tendetai, kinhphi, mahn) VALUES ('$madetai', '$tendetai', '$kinhphi', '$mahn')";
    $result = $sql;
    if(mysqli_query($conn, $result)){
        echo "Them thanh cong";
    }
    else{
        echo "Loi: ".$result."<br>".mysqli_error($conn);
    }
}
//     echo "<section id='cars'>";
//     if(mysqli_num_rows($result) > 0){
//         while($row = mysqli_fetch_array($result)) {
//             echo "<option>";
//                 echo $row;
//             echo "</option>";
//         }
//     }
// echo "</section>";
mysqli_close($conn);
?>
    <!-- <button type="submit" style="border: 1px solid black;">Them</button>
</center> -->
</form>
</body>
</html>