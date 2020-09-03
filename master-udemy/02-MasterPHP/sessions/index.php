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
        <p>Session: store and persist user data while he/she are using the browser</p>
        <?php
        // Start the session:
        session_start();
        $variable = "This is the session";
        // Session varianle:
        $_SESSION['variable'] = "This is an active session";
        echo $variable . '<br/>';
        echo $_SESSION['variable'] . '<br/>';
        ?>
        <?php
        include './navigation.php';
        ?>
        <hr>
    </body>
</html>
