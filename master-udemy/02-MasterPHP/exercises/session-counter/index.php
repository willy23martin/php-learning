<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise - Session counter</title>
    </head>
    <body>
        <h3>Exercise - Session counter</h3>
        <?php
        session_start();
        if (!isset($_SESSION["counter"])) {
            $_SESSION["counter"] = 0;
        }
        if (isset($_GET["counter"]) && $_GET["counter"] == 1) {
            $_SESSION["counter"]++;
        }
        if (isset($_GET["counter"]) && $_GET["counter"] == 0) {
            --$_SESSION["counter"];
        }
        ?>
        <h4>The Session value is: <?= $_SESSION["counter"] ?></h4>
        <a href="index.php?counter=1">Increment session counter</a><br/>
        <a href="index.php?counter=0">Decrement session counter</a><br/>
    </body>
</html>
