<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Online Calculator</title>
    </head>
    <body>
        <h3>Receive two numbers as a query param in URL, and make all the algebraical operations between them</h3>
        <?php
        $numberA = (int) $_GET["numberA"];
        $numberB = (int) $_GET["numberB"];
        if (!isset($numberA)) {
            echo 'Insert the query param numberA' . '<br/>';
        } elseif (!isset($numberB)) {
            echo 'Insert the query param numberB' . '<br/>';
        } else {
            echo '<ol>';

            echo '<li>';
            echo "Addition between $numberA + $numberB = " . ($numberA + $numberB) . '<br/>';
            echo '</li>';

            echo '<li>';
            echo "Substraction between $numberA - $numberB = " . ($numberA - $numberB) . '<br/>';
            echo '</li>';

            echo '<li>';
            echo "Multiplication between $numberA * $numberB = " . ($numberA * $numberB) . '<br/>';
            echo '</li>';

            echo '<li>';
            echo "Division between $numberA / $numberB = " . ($numberA / $numberB) . '<br/>';
            echo '</li>';

            echo '<li>';
            echo "Module between $numberA % $numberB = " . ($numberA % $numberB) . '<br/>';
            echo '</li>';

            echo '</ol>';
        }
        ?>
    </body>
</html>
