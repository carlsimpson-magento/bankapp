<?php

require './db.php';
require './Account.php';

include './header.php';



?>

<div class="main homepage">
    <h1>Welcome to the bank</h1>
   <span class="homepage-links"><a href="./register.php">Register a new account</a></span><br />
    <span class="homepage-links"><a href="./login.php">Login to an existing account</a></span>
</div>


<!--

// enter username and email -> checks if existing user
                            -> redirects to role screen based on user-role

// Admin Role Screen
 -> create user
 -> update user
 -> delete user

// User Role Screen
 -> Account information
 -> Balance
 -> Statement

-->