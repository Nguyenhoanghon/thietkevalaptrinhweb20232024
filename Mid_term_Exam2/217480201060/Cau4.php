<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            max-width: 600px;
            margin: 50 auto;
            background-color: #f2f2f2;
            padding: 50px;

        }

        label{
            display: block;
            font-size: 25px;
            margin-bottom: 5px
        }

        input[type="text"],
        select{
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            font-size: 25px;
        }

        input[type="submit"]
        {
            margin: 10px;
            height: 50px;
            width: 90px;
            background-color: blue;
            color: #fff;
            font-size: 25px;
            border-radius: 8px;
        }

        h1{
            text-align: center;
            color: Red;
            font-size: 50px;
        }

    </style>
</head>

<body>
    <form action="" method="get">
        <h1>Them</h1>
        <div>
            <label for="MADETAI">Ma de tai:</label>
            <input type="text" name="MADETAI" required>
        </div>
        <div>
            <label for="TENDETAI">Ten de tai:</label>
            <input type="text" name="TENDETAI" required>
        </div>
        <div>
            <label for="KINHPHI">Kinh phi</label>
            <input type="text" name="KINHPHI" required>
        </div>
        <div>
            <label for="mahn">Ma hoi nghi:</label>
            <Select name="mahn">
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "hoithao";

                $conn = new mysqli($servername, $username, $password, $dbname);
                $sql = "SELECT `mahn` FROM `dshoinghi`";

                $result = $conn->query($sql);
                while($row = mysqli_fetch_array($result))
                {
                    echo "<option value='" .$row['mahn']. "'selected>".$row['mahn']."</option>";
                }
                ?>
            </Select>
        </div>
        <div>
            <input type="submit" value="Them" name="them">
        </div>
    </form>

    <?php
        if(isset($_GET['them']))
        {
            $madetai = $_GET["MADETAI"];
            $tendetai = $_GET["TENDETAI"];
            $kinhphi = $_GET["KINHPHI"];
            $mahn = $_GET["mahn"];

            $sql = "INSERT INTO `dsdetai`(`madetai`, `tendetai`, `kinhphi`, `mahn`) VALUES ('$madetai', '$tendetai', '$kinhphi', '$mahn')";
            $result = $conn->query($sql);

            if($result==true)
            {
                echo "<script>
                alert('Thêm thành công');
                </script>";
            }
        }
    ?>
</body>
</html>
