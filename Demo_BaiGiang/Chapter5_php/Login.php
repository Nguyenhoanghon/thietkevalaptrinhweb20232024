<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_form</title>
</head>

<body>
    <h1>Login</h1>
    <form action="validateuser.php" Method="GET">
        Username : <input type="text" name="username" />
        <input type="submit" value="Tìm" />
    </form>
    <?php
//if (!isset($_REQUEST['username'])) {
echo $_GET['username'];
//}

?>
</body>

</html>
