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
            width: 150px;
            background-color: blue;
            color: #fff;
            font-size: 25px;
            border-radius: 8px;

            
        }

        table{
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
    margin-bottom: 20%;
        }
        th{
    background-color: rgb(24, 124, 124);
    color: aliceblue;
    font-weight: bold;
    padding: 15px;
    text-align: center;
    font-size: 25px;

}
td{
    padding: 10px;
    border-bottom: 1px solid #ddd;
    text-align: center;
    font-size: 20px;

}

tr:nth-child(even)
{
    background-color: #f2f2f2;
}
tr:hover{
    background-color: #ddd;
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
        <h1>Tim kiem</h1>
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
            <input type="submit" value="Tim kiem" name="tim">
        </div>

    </form>
    <?php
        if(isset($_GET["tim"]))
        {
            echo "<table>
            <tr>
                <th>Ma de tai</th>
                <th>Ten de tai</th>
                <th>Kinh phi</th>
                <th>Ma hoi nghi</th>
            </tr>";
                            $servername = "localhost";
                            $username = "root";
                            $password = "";
                            $dbname = "hoithao";
    
                            $mahn = $_GET["mahn"];
            
                            $conn = new mysqli($servername, $username, $password, $dbname);
                            $sql = "SELECT * FROM `dsdetai` where `MAHN` = '$mahn'";
                            $result = $conn->query($sql);
                            {
                                while($row = mysqli_fetch_array($result))
                                {
                                    echo "<tr>
                                    <td>".$row['MADETAI']."</td>
                                    <td>".$row['TENDETAI']."</td>
                                    <td>".$row['KINHPHI']."</td>
                                    <td>".$row['MAHN']."</td>
                                     </tr>";
                                }
                                echo "</table>";
                            }
        }

    ?>
</body>
</html>