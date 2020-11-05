<?php

include './header.php';

?>

<div class="main">
    <h1>Register your account for the bank</h1>
    <section>
        <div class="login-form">
            <form action="register-form.php" method="POST">
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username"><br>
                <span class="error" id="username"><?php echo isset($error['username'])?$error['username']:''; ?></span>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email"><br>
                <span class="error" id="email"><?php echo isset($error['email'])?$error['email']:''; ?></span>
                <label for="pword">Password:</label><br>
                <input type="text" id="pword" name="pword"><br>
                <span class="error" id="pword"><?php echo isset($error['pword'])?$error['pword']:''; ?></span>
                <input type="submit" />
            </form>
        </div>
    </section>
</div>