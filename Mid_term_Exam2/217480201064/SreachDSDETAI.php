<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm danh sách đề tài</title>
</head>
<body>
    <form action="" method="post">
        <h1>QUẢN LÝ HỘI THẢO</h1>
        <div class = "container">
            <div class = "form-group">
                <label for="MADETAI">Mã đề tài</label>
                <input type="text" name="MADETAI" id="MADETAI" require>
            </div>
            <div class = "form-group">
                <label for="TENDETAI">Tên đề tài</label>
                <input type="text" name="TENDETAI" id="TENDETAI" require>
            </div>
            <div class = "form-group">
                <label for="KINHPHI">Kinh phí</label>
                <input type="text" name="KINHPHI" id="KINHPHI" require>
            </div>
            <div class = "form-group">
                <label for="MAHN">Mã hội nghị</label>
                <input type="text" name="MAHN" id="MAHN" require>
            </div>
            <div class = "form-action">

                <input type="submit" value = "Sua" name="TIMKIEM">
        </div>
    </form>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "hoithao";

        $conn = new mysqli ($servername, $username, $password, $database);
        if ($conn->connect_error){
            die ("Connectipn failed: ".$conn->connect_error);
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $MADETAI =$_POST["MADETAI"];
            
        }

        if(isset($_POST["THEM"]))
        $sql = "SELECT * FROM `dsdetai` WHERE MADETAI =$MADETAI";
        if ($result = mysqli_query($conn,$sql)){
            if (mysqli_num_rows($result)>0){
                while($row = mysqli_fetch_array ($result)){
                    
                }
            }
        }

        
    ?>
</body>
</html>