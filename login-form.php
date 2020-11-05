<?php

require './db.php';
include './header.php';

$data = $_POST;

    $statement = $connection->prepare('SELECT * FROM users WHERE username = :username');
    if($statement){
        $statement->execute([
            ':username' => $data['username'],
        ]);

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($result)){
            header('Location: admin.php');
            exit;
        } else {
            header('Location: index.php');
            exit;

        }

}