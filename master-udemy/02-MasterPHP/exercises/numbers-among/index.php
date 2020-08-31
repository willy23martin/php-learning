<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Numbers Among</title>
    </head>
    <body>
        <h3>Find numbers among two different numbers</h3>
        <?php
        if (isset($_GET["lowerLimit"]) && isset($_GET["upperLimit"])) {
            $lowerLimit = (int) $_GET["lowerLimit"];
            $upperLimit = $_GET["upperLimit"];
            for ($i = $lowerLimit+1, $count = 1; $i < $upperLimit; $i++) {
                echo "Number among #$count: " . $i . '<br/>';
                $count++;
            }
        } else {
            echo 'Please insert lowerLimit and upperLimitquery params values.' . '<br/>';
        }
        ?>
    </body>
</html>
