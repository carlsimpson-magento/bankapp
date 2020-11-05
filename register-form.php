<?php

require './db.php';
include './header.php';


$data = $_POST;

if(empty($_POST['username']) || empty($_POST['email']) || empty($_POST['pword']))   {

    echo "<div class='main'>";
    echo "<p class=''>Please Fill in :</p>";
    echo "<p class='error'>Username :</p>";
    echo "<p class='error'>Email :</p>";
    echo "<p class='error'>Password :</p>";
    echo "<a href='register.php'>BACK :</a>";

    echo "</div>";

} else {

    $statement = $connection->prepare('INSERT INTO users (username, email, pword) VALUES (:username , :email , :pword)');

    if($statement) {

        $result = $statement->execute([
            ':username' => $data['username'],
            ':email' => $data['email'],
            ':pword' => $data['pword']
        ]);


        echo "<div class='main'>";
        echo "</p>your details were entered into the Database</p>";
        echo "<a href='index.php'>Continue -></a>";
        echo "</div>";

    } else {

        echo 'did not enter statement into database';
    }


}

?>
