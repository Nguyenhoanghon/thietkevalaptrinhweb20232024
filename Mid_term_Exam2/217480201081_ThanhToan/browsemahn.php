<?php
    $servername = "localhost";
    $username = "root";
    $database = "hoithao";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Connection failed");
        exit();
    };

    $mahn = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["txtmahn"])) {
            $tendetai = $_POST['txtmahn'];
        }

        $sql = "SELECT * FROM DSDETAI WHERE MAHN = $mahn";
            if($result = mysqli_query($conn,$sql)) {
                if(mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo $row['$mahn'];
                    }

                    mysqli_free_result($result);
                }
                else {
                    echo "No found";
                }
            }
    }

    mysqli_close($conn);
?>