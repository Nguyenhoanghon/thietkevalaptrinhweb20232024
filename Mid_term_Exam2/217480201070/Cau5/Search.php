<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>
<body>
    <h3 class="text-center m-5">KẾT QUẢ TÌM KIẾM</h3>
    <div  class="position-relative">
    <table class="table position-absolute top-0 start-50 translate-middle-x" style="width: 700px;">
        <thead>
            <tr>
                <th scope="col">Mã đề tài</th>
                <th scope="col">Tên đề tài</th>
                <th scope="col">Kinh phí</th>
                <th scope="col">Mã hội nghị</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include("connection.php");
                $mahn = "";

                if($_SERVER["REQUEST_METHOD"] == "POST") {
                    if(isset($_POST["txtMaHN"]))
                        $mahn = $_POST["txtMaHN"];
                    
                    $sql = "select * from dsdetai where mahn = '$mahn'";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<th scope=\"row\">{$row['MADETAI']}</th>";
                            echo "<td>{$row['TENDETAI']}</td>";
                            echo "<td>{$row['KINHPHI']}</td>";
                            echo "<td>{$row['MAHN']}</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr>";
                        echo "<td>Không có dữ liệu.</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "</tr>";
                    }

                    mysqli_close($conn);
                }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>

