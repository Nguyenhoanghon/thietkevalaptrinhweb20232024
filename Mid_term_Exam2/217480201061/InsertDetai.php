<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chèn</title>
</head>
<body>
<?php
    $servername = "localhost";
    $database = "hoithao";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $database);
    if (!$conn)
    {
        die("Connection failed: ".mysqli_connect_error());
        exit();
    }

    $MDT="";
    $TDT="";
    $KP="";
    $MAHN="";
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if(isset($_POST["txtMaDeTai"]))
        {
            $MDT = $_POST['txtMaDeTai'];
        }
        if(isset($_POST["txtTenDeTai"]))
        {
            $TDT = $_POST['txtTenDeTai'];
        }
        if(isset($_POST["txtKinhPhi"]))
        {
            $KP = $_POST['txtKinhPhi'];
        }
        if(isset($_POST["txtMaHN"]))
        {
            $MAHN = $_POST['txtMaHN'];
        }

        $sql = "INSERT INTO dsdetai VALUES ('$MDT', '$TDT', '$KP', '$MAHN')";
        if(mysqli_query($conn, $sql))
        {
            echo "Thêm dữ liệu thành công";
        }
        else
        {
            echo "Error:".$sql."<br>".mysqli_error($conn);
        }
    }
    mysqli_close($conn);
?>
</body>
</html>
