<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<h1>Home page</h1>
<?php
session_start();
echo "Xin chào" . $_SESSION['tendangnhap'];
?>
</body>
</html>
