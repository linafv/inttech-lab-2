<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET['shop'])) {
            include 'connection.php';
            $shop = $_GET['shop'];
            $db = (new MongoDB\Client)->$shop->$shop;
            $cursor = $db->distinct("vendor");
            $result = "<p>Перечень производителей с которыми работает магазин: <b> $shop</b></p>";
            $result .= "<ol>";
            foreach($cursor as $document){
                $result = $result . "<li>$document</li>";
            }
            $result = $result . "</ol>";
            echo $result;
        }
        ?>
<?php
echo "<script> localStorage.setItem('$shop', '$result'); </script>";
?>