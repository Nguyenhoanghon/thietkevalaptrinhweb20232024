<?php
    $username="student";
    $password="";
    $servername="localhost";
    $database="hoithao.sql"

    $connect = mysqli_connect($servername,$username,$password,$database);

    if(!$connect){
        die("Khong ket noi:" . mysqli_connect_error());
        exit();
    }

    $detai="";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(isset($_POST["Mhn"])){
            $mhn=$_POST['Mhn'];
        }

    $sql = "SELECT * FORM DSHN WHERE detai=$detai";
        if($result=mysqli_query($connect,$sql)){
            if(mysqli_num_rows($result)>0){
                while ($row=mysqli_fetch_array($result)){
                    echo $row['Mhn'];
                }
                mysqli_free_result($result);
            }
            else{
                echo "No Records";
            }
        }
    }
    mysqli_close($connect);
?>