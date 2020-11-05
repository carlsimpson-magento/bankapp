<?php

$data = $_POST;

$dsn = 'mysql:dbname=bank;host=localhost';
$dbUser = 'root';
$dbPassword ='root';

try {
    $connection = new PDO($dsn,$dbUser,$dbPassword);
} catch (PDOException $exception) {

    exit;
}


?>
