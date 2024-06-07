<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $database = "dsdetai";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if(!$conn){
            die("connection failed: ".
            mysqli_connect_error());
        }  
        echo "connected successfully";
        mysqli_close($conn);
    ?>
</body>
</html>