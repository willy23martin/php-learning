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
        // put your code here
        define("constantA", "Constant value A");
        define("constantB", "Constant value B");
        echo "<h3>" . constantA . "</h3>" . "<br>";
        echo "<h3>" . constantB . "</h3>" . "<br>";
        ?>

        <?php
        // Pre-defined contansts
        echo PHP_OS . "<br>"; // Operative system.
        echo PHP_VERSION . "<br>"; // PHP version;
        echo PHP_EXTENSION_DIR . "<br>"; // PHP version directory;
        echo __LINE__ . "<br>"; // Sentence line;
        echo __FILE__ . "<br>"; // PHP directory;

        function myFirstFunction() {
            echo __FUNCTION__; // Name of this function;
        }
        
        ?>
    </body>
</html>
