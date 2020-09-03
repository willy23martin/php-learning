<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Working with Sessions</title>
    </head>
    <body>
        <h3>Working with Sessions</h3>
        <p>Cookie: file stored in the client side and in the server side.</p>
        <?php
        // setcookie("name", "text value",timeout, path, domain);
        setcookie("firstCookie", "cookie value A");
        // With delta time:
        setcookie("cookieB", "timeout", time() + (60 * 60 * 24 * 365));
        
        ?>
        <?php
        include './navigation.php';
        ?>
        <a href="see_cookies.php">See cookies</a>
        <hr>
    </body>
</html>
