<?php

require './db.php';

include './header.php';

//print_r($_POST);


$statement = $connection->prepare('SELECT * FROM users WHERE username = :username');
if($statement){

    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

    if(!empty($result)){
        header('Location: index.php');
        exit;
    } else {
        //header('Location: register.php');
        //exit;

    }
}
?>

<div class="main">
    <h1>Login to the bank</h1>
    <section>
        <div class="login-form">
            <form action="login-form.php" method="POST">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <label for="pword">Password:</label><br>
                <input type="text" id="pword" name="pword"><br>
                <input type="submit" />
            </form>
        </div>
    </section>
</div>