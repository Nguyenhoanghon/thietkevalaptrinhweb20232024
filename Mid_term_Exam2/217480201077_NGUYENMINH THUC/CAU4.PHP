<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>THÊM DANH SÁCH ĐỀ TÀI</title>
</head>
<body>
    <!-- THÊM ĐỀ TÀI -->
    <form method="POST" action="">
        <h2>THÊM ĐỀ TÀI VÀO DANH SÁCH</h2>
        <div>
            <label for="MADETAI">MÃ ĐỀ TÀI:</label>
            <input type="text" id="MADETAI" NAME="MADETAI" required>
        </div>
        <div>
            <label for="TENDETAI">TÊN ĐỀ TÀI:</label>
            <input type="text" id="TENDETAI" name="TENDETAI" required>
        </div>
        <div>
            <label for="KINHPHI">KINH PHÍ:</label>
            <input type="text" id="KINHPHI" name="KINHPHI" required>
        </div>
        <div>
            <label for="MAHN">MÃ HỘI NGHỊ:</label>
            <input type="text" id="MAHN" name="MAHN" required>
        </div>
        <div>
            <button type="submit" name="add">Thêm đề tài</button>
        </div>
    </form>
    <!-- liên kết sql -->
    <?php
    $servername ="localhost";
    $database ="hoithao";
    $username ="root";
    $password ="";

    $conn=mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("<p style='color:red;'> connection failed:".mysqli_connect_error()."</p>");
    }

    // thêm đề tài
    if(isset($_POST['add'])){
        $MADETAI=$_POST['MADETAI'];
        $TENDETAI=$_POST['TENDETAI'];
        $KINHPHI=$_POST['KINHPHI'];
        $MAHN=$_POST['MAHN'];

        $sql="INSERT INTO dsdetai(MADETAI,TENDETAI,KINHPHI,MAHN)VALUES('$MADETAI','$TENDETAI','$KINHPHI','$MAHN')";

        if(mysqli_query($conn, $sql)){
            echo "<p stype= 'color:green;'>đã thêm thành công</p>";
        }else{
            echo "<p stype= 'color:green;'>lỗi:".$sql."<br>",mysqli_error($conn)."</p>";
        }
    }

    ?>
</body>
</html>