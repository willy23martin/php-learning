<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variables</title>
    </head>
    <body>
        <h3>Global Variables</h3>
        <?php
        echo '$globalVariable = "Global";';
        $globalVariable = "Global";

        function f() {
            echo "Value of a global variable inside a function and without global prefix: " . $globalVariable . '<br/>';
            global $globalVariable;
            echo "Value of a global variable inside a function and with global prefix: " . $globalVariable . '<br/>';
        }

        f();
        ?>
        <hr>

        <h3>Local Variables</h3>
        <?php
        echo 'function f($x,$y,$z){' . '<br/>';
        echo '$localVariable = "Local";' . '<br/>';
        echo '}' . '<br/>';
        ?>
        <hr>

        <h3>Functions like Variables</h3>
        <?php

        function fxONE() {
            echo 'This is a function that would be a varibale also- ONE';
        }

        function fxTWO() {
            echo 'This is a function that would be a varibale also- TWO';
        }

        function fxTHREE() {
            echo 'This is a function that would be a varibale also- THREE';
        }

        $functionType = "TWO";
        $functionLikeVariable = "fx" . $functionType;
        echo $functionLikeVariable();
        ?>
        <hr>

    </body>
</html>
