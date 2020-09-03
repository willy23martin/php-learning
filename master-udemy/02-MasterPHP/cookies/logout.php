<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logout Session</title>
    </head>
    <body>
        <h3>Thank you - Bye Session</h3>
        <?php
        session_start();
        echo $_SESSION['variable'] . '<br/>';
        session_destroy();
        unset($_COOKIE["firstCookie"]);
        unset($_COOKIE["cookieB"]);
        setcookie('firstCookie', '', time() - 100);
        setcookie('cookieB', '', time() - 100);
        header('Location:see_cookies.php');
        ?>
    </body>
</html>
