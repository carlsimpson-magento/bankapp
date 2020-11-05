<?php
/*	Start the Session, required for Session-based authentication.
	Remeber to call session_start() before sending any output to the remote client.
	Also, make sure to set a proper session cookie lifetime in your php.ini.

	For example, this sets the cookie lifetime to 7 days:
	session.cookie_lifetime=604800
*/
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="images/favicon.png"/>
    <link rel="stylesheet" href="styles.css">
    <title>The Internet Bank</title>
</head>
<body>
<header>
    <div>
        <a href="index.php">
            <img src="images/logo.jpg" class="logo" alt="logo" >
        </a>
    </div>
</header>
<div class="hero">
    <img src="images/hero.jpg" class="hero" alt="">
</div>