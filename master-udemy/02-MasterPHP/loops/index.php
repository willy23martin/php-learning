<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Loops</title>
    </head>
    <body>
        <h3>WHILE - Loops:</h3>
        <?php
        $index = 10;
        while ($index < 100) {
            echo "$index: Item $index" . '<br>';
            $index *= 2;
        }
        ?>
        <hr>

        <?php
        $stringNumber = "2";
        $indexA = (int) $stringNumber;
        if (isset($indexA)) {
            while ($indexA < 100) {
                echo "$indexA: Item $indexA" . '<br>';
                $indexA *= 3;
            }
        } else {
            echo 'indexA does not exists.' . '<br>';
        }
        ?>
        <hr>

        <h3>DO WHILE - Loops:</h3>
        <?php
        $age = 18;
        $count = 0;
        do {
            echo 'You have access to all the web page content.' . '<br>';
            $count++;
        } while ($age >= 18 && $count <= 5);
        ?>
        <hr>

        <h3>FOR - Loops:</h3>
        <?php
        $result = 0;
        for ($i = 0; $i <= 7; $i++) {
            if ($result > 18) {
                break;
            }
            $result += $i;
            echo "Partial result: $result" . '<br/>';
        }
        echo "Final result: $result" . '<br/>';
        ?>
        <hr>
    </body>
</html>
