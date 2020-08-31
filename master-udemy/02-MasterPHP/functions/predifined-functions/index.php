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
        <?php
        $expression = [90, 234];
        var_dump($expression);

        // Reference: https://www.php.net/manual/en/function.date.php
        $format = DateTime::ISO8601;
        echo 'ISO 8601 date format: ' . date($format) . '<br/>';

        echo 'Time data: ' . time() . ' milliseconds <br/>';

        // Mathematical functions:
        echo 'Raíz cuadrada de 57: ' . sqrt(57) . '<br/>';
        echo 'Random number between two numbers: ' . rand(56, 1115) . '<br/>';
        echo 'Pi number: ' . pi() . '<br/>';
        echo 'Decimal precision function(decimal, precision): ' . round(11.352365, 2) . '<br/>';

        echo 'Variable Type: ' . gettype(626.89) . '<br/>';
        echo 'Verify if it is string: ' . is_string("Hi There") . '<br/>';
        echo 'Verify if it is float: ' . is_float(895) . '<br/>';
        echo 'Verify if it is set: ' . isset($notDefinedVariable) . '<br/>';
        $str = "      Hi There!       ";
        echo 'Trim blank characters of a phrase: ' . trim($str) . '<br/>';
        var_dump($str);

        $year = 2322;
        unset($year);
        var_dump($year);

        echo 'Verify if it is empty: ' . empty("") . '<br/>';
        echo 'Verify # characters of a string: ' . strlen($str) . '<br/>';
        echo 'Found the position of a character in a word: ' . strpos($str, "Hi") . '<br/>';
        echo 'Replace a character in a word: ' . str_replace("Hi", "Hello", $str) . '<br/>';
        ?>
    </body>
</html>
