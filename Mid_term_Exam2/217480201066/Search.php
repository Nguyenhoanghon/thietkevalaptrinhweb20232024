<?php
    $username = "root";
    $password = "";
    $server ="localhost";
    $dbname ="hoithao";

    $connect =mysqli_connect($server,$username,$password,$dbname);
    if(!$connect){
        die("không kết nối được:".mysqli_connect_error());
        exit();
    }

    $MAHN ="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){      
        if(isset($_POST["Mahoinghi"])){
            $MAHN = $_POST['Mahoinghi'];
        }
       $sql = " SELECT * FROM dsdetai WHERE MAHN = $MAHN";
       
    }
    mysqli_close($connect);
?>