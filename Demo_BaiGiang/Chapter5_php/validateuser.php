<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>validateuser</title>
</head>
<body>
    <?php
//global variable
global $username;
$username = 'admin';
global $password;
$password = $_REQUEST['password'];

//Khởi động session
session_start();
$_SESSION["IsLogin"] = false;
//Đăng ký session
$login_name = $_REQUEST['username'];
echo $login_name;

//$login_pass = $_REQUEST['password'];

if ($login_name == $username) {
    $_SESSION["IsLogin"] = true;
    $_SESSION['tendangnhap'] = $username;
    header("Location: Homepage.php");
} else {
    header("Location: Login.php");
}
?>

<?php
destroy_session();
?>

</body>
</html>
