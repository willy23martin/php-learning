<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Arithmetic Operators:</h3>
        <?php
        $numberA = 26;
        $numberB = 13;
        echo 'Addition: ' . ($numberA + $numberB) . '<br>';
        echo 'Substraction: ' . ($numberA - $numberB) . '<br>';
        echo 'Multiplication: ' . ($numberA * $numberB) . '<br>';
        echo 'Division: ' . ($numberA / $numberB) . '<br>';
        echo 'Module: ' . ($numberA % ($numberB - 2)) . '<br>';
        ?>
        <hr>
        
        <h3>Increment-Decrement Operators:</h3>
        <?php
        $year = 2020;
        echo 'Increment: ' . ($year++) . '<br>';
        echo 'Decrement: ' . ($year--) . '<br>';
        echo 'Pre-Increment: ' . (++$year) . '<br>';
        echo 'Pre-Decrement: ' . (--$year) . '<br>';
        ?>
        <hr>
        
        <h3>Assigment Operators:</h3>
        <?php
        $age = 30;
        echo 'Current Age: ' . $age . '<br>';
        echo 'Assigment - increment: ' . ($age+=5) . '<br>';
        echo 'Assigment - decrement: ' . ($age-=5) . '<br>';
        echo 'Assigment - increment multiplication: ' . ($age*=5) . '<br>';
        echo 'Assigment - decrement division: ' . ($age/=5) . '<br>';
        ?>
        <hr>
        
    </body>
</html>
