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
        /*
         * Data types:
         * - integer (int) = 99.
         * - float (double) = 3.45.
         * - strings = "Text1" or 'Text simple'.
         * - boolean = (1 or 0) or (true or false).
         * - null.
         * - Array (data collection).
         * - Objects.
         */
        $nullVariable;
        echo $nullBariable . "<br>";
        echo gettype($nullBariable) . "<br>";
        ?>
        <?php
        // Variables:
        $numberVariable = 100;
        $decimalVariable = 27.9;
        $textVariable = "Text 1";
        $booleanVariable = true;
        echo $booleanVariable . "<br>";

        // Debuging:
        $toDebugVariable = "My debug variable";
        var_dump($toDebugVariable);

        $toDebugArrayVariable[] = "Element A";
        $toDebugArrayVariable[] = "Element B";
        var_dump($toDebugArrayVariable);

        // String with double quotes (low performance):
        $stringDoubleQuotesWithVariable = "Text with quotes and variable value: $decimalVariable <br>";
        echo $stringDoubleQuotesWithVariable;
        
        // String with simple quotes (high performance):
        $stringSimpleQuotesWithVariable = 'Text with quotes and variable value:'.$decimalVariable."<br>";
        echo $stringSimpleQuotesWithVariable;
        
        // To know the data type of a variable:
        echo gettype($numberVariable) . "<br>";
        echo gettype($decimalVariable) . "<br>";
        echo gettype($textVariable) . "<br>";
        echo gettype($booleanVariable) . "<br>";
        ?>
    </body>
</html>
