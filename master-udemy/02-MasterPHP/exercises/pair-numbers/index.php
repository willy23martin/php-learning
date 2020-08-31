<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pair Numbers to Hundred</title>
    </head>
    <body>
        <?php
        $naturalNumber = 1;
        $index = 1;
        do {
            if ($naturalNumber % 2 === 0) {
                echo "$index - $naturalNumber".'<br>';
                $index++;
            }
            ++$naturalNumber;
        } while ($naturalNumber <= 100);
        ?>
    </body>
</html>
