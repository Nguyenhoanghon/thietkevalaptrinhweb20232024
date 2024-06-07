<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
<body>
    <div class="container">
        <div class="text-center bg-muted mb-3">
            <form action="" method="get">
                <h3>Nhập mã hội nghị cần tìm</h3>
                <input type="text" name="inputSearch" id="inputSearch" class="form-control d-inline w-auto" placeholder="Nhập  mã hội nghị"
                    value="<?php  echo isset($_GET['inputSearch']) ? $_GET['inputSearch'] : '';
                    ?>"
                >
                <button type="submit" class="btn btn-secondary">Tìm</button>
                <button type="submit" class="btn btn-info" onclick="window.open('insert.html');">Thêm đề tài</button>
            </form>
        </div>
        <table class="table table-hover text-center">
            <thead class="table-dark">      
                <tr>
                    <th scope="col">Mã đề tài</th>
                    <th scope="col">Tên đề tài</th>
                    <th scope="col">Kinh phí</th>
                    <th scope="col">Mã hội nghị</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    include ("connectDB.php");
                    $search = '';
                    if (isset($_GET['inputSearch'])) {
                        $search = $_GET['inputSearch'];
                    }
                    $sql = "SELECT * FROM `dsdetai`";
                    if (!empty($search)) {
                    $sql = "SELECT * FROM `dsdetai` WHERE `MAHN` LIKE '%$search%'";
                }
                $result = mysqli_query($conn, $sql);
                if ($result->num_rows > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                            <td> {$row['MADETAI']} </td>
                            <td> {$row['TENDETAI']} </td>
                            <td> {$row['KINHPHI']} </td>
                            <td> {$row['MAHN']} </td>
                        </tr>";
                    }
                }
                else {
                    echo "<tr>
                        <td colspan='6'>Không có thông tin </td>
                    </tr>";
                }
                mysqli_close($conn);
            ?>
        </tbody>
    </table>
    </div>
</body>
<script src="../bootstrap/js/bootstrap.css"></script>
</html>