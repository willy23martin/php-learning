<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Square Natural Numbers</title>
    </head>
    <body>
        <?php
        $naturalNumber = 1;
        while ($naturalNumber < 41) {
            echo "Square of $naturalNumber: $naturalNumber*$naturalNumber = " . ($naturalNumber * $naturalNumber) . '<br/>';
            ++$naturalNumber;
        }
        ?>
    </body>
</html>
