<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vidu_2_xuly</title>
</head>

<body>
    <form action="Vidu_2_xuly.php" Method="POST">
        Từ khóa : <input type="text" name="txtTukhoa" />
        <input type="submit" value="Tìm" />
    </form>
    <?php
       $sTukhoa = $_REQUEST["txtTukhoa"];
       if (isset($sTukhoa))
       {
           print "Từ khóa tìm sách là : $sTukhoa";
           echo "<br>Kết quả tìm là : ";
       }
    ?>
</body>

</html>