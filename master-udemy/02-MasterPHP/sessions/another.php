<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Another page of the session</title>
    </head>
    <body>
        <h3>Another page of the session</h3>
        <?php
        session_start();
        echo $_SESSION['variable'] . '<br/>';
        ?>
        <?php
        include './navigation.php';
        ?>
    </body>
</html>
