<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tablas Multiplicar</title>
    </head>
    <body>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo '<table colspan=5 border=1>';

            echo '<tr>';
            echo "<th>Number</th>";
            echo "<th>Factor</th>";
            echo "<th>Product</th>";
            echo '</tr>';
            
            $factor = 1;
            do {
                echo '<tr>';
                echo "<td>$i</td>";
                echo "<td>$factor</td>";
                $product = $i * $factor;
                echo "<td>$product</td>";
                echo '</tr>';
                $factor++;
            } while ($factor <= 10);
            echo '</table>';
        }
        ?>
    </body>
</html>
