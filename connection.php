<?php
require_once __DIR__ ."/vendor/autoload.php";
$db = (new MongoDB\Client);
$collection = (new MongoDB\Client)->shop->shop;
?>
