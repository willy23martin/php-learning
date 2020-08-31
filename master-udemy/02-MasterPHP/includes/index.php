<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Includes</title>
    </head>
    <body>
        <?php
        include './toBeIncluded.php'; // Allow us to re-useit more than once.
        ?>
        <?php
        include_once './toBeIncluded.php'; // Allow us to re-useit more than once.
        ?>
        <?php
        require './toBeRequired.php'; // Allow us to re-useit more than once.
        ?>
        <?php
        require_once './toBeRequired.php'; // Allow us to re-useit more than once.
        ?>
        <ul>
            <li><a href="toBeIncluded.php">Included PHP page</a></li>
        </ul>
    </body>
</html>
