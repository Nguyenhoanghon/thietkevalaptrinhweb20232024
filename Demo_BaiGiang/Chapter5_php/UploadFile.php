<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>upload file-toidicode.com</title>
        <link rel="stylesheet" href="">
</head>
<body>
<?php
$path = getcwd();
$items = scandir($path);
//hoặc có thể viết là: $items = scandir('.');
echo "<p>Content of $path</p>";
echo '<ul>';
foreach ($items as $item) {
    echo '<li>' . $item . '</li>';
}
echo '</ul>';
?>

        <form action="" method="post"
         enctype="multipart/form-data">
            <input type="file" name="fileUpload" value="">
            <input type="submit" name="up" value="Upload">
        </form>
    <?php
if (isset($_POST['up']) &&
    isset($_FILES['fileUpload'])) {
    if ($_FILES['fileUpload']['error'] > 0) {
        echo "Upload error!";
    } else {
        move_uploaded_file($_FILES['fileUpload']['tmp_name'],
            '/Applications/XAMPP/xamppfiles/htdocs/thietkevalaptrinhweb20232024/Demo_BaiGiang/Chapter5_php' . $_FILES['fileUpload']['name']);
        echo "upload success <br/>";
        echo 'Dườngdẫn: data/' .
            $_FILES['fileUpload']['name'] . '<br>';
        echo 'Loại file: ' . $_FILES['fileUpload']['type'] .
            '<br>';
        echo 'Dung lượng: ' . (int) $_FILES(['fileUpload']['size'] / 1024) . 'KB';
    }
}
?>
</body>
</html>