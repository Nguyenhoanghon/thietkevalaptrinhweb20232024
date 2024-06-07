<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="position-relative m-5" style="min-width: 350px;">
        <form action="Search.php" method="post" class="position-absolute top-0 start-50 translate-middle-x"  style="box-shadow: 0 0 30px 8px #ccc; padding: 32px;">
            <h3 class="text-center">Tìm đề tài</h3>

            <div class="mb-3">
                <label class="form-label fw-bold">Chọn hội nghị</label>
                <select name="txtMaHN" class="form-control">
                    <?php
                        include("connection.php");
                        $sql = "select * from dshoinghi";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_array($result)) {
                                echo '<option value="' . $row['MAHN'] . '">' . $row['TENHN'] . '</option>';
                            }
                        }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
    </div>

    <script src="../bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>