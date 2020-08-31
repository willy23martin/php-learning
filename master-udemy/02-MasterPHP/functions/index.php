<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Functions</title>
    </head>
    <body>
        <h3>Functions in PHP - Show Names</h3>
        <?php

        function showNames() {
            echo '<ol>';

            echo '<li>';
            echo 'Name A';
            echo '</li>';
            echo '<li>';
            echo 'Name B';
            echo '</li>';

            echo '</ol>';
        }

        showNames();
        ?>
        <hr>

        <h3>Functions in PHP - Show Multiplication Table</h3>
        <?php

        function multiplicationTable($number) {
            echo '<table colspan=5 border=1>';

            echo '<tr>';
            echo "<th>Number</th>";
            echo "<th>Factor</th>";
            echo "<th>Product</th>";
            echo '</tr>';

            $factor = 1;
            do {
                echo '<tr>';
                echo "<td>$number</td>";
                echo "<td>$factor</td>";
                $product = $number * $factor;
                echo "<td>$product</td>";
                echo '</tr>';
                $factor++;
            } while ($factor <= 10);
            echo '</table>';
        }

        multiplicationTable(17);
        ?>
        <hr>


        <h3>Functions in PHP - Basic Calculator between two numbers</h3>
        <?php

        function basicCalculator($numberA, $numberB, $bold = false) {
            $result = '';
            if (!isset($numberA)) {
                echo 'Insert the query param numberA' . '<br/>';
            } elseif (!isset($numberB)) {
                echo 'Insert the query param numberB' . '<br/>';
            } else {

                if ($bold != false) {
                    echo '<b>';
                }
                $result .= '<ol>';
                $result .= '<li>';
                $result .= "Addition between $numberA + $numberB = " . ($numberA + $numberB) . '<br/>';
                $result .= '</li>';

                $result .= '<li>';
                $result .= "Substraction between $numberA - $numberB = " . ($numberA - $numberB) . '<br/>';
                $result .= '</li>';

                $result .= '<li>';
                $result .= "Multiplication between $numberA * $numberB = " . ($numberA * $numberB) . '<br/>';
                $result .= '</li>';

                $result .= '<li>';
                $result .= "Division between $numberA / $numberB = " . ($numberA / $numberB) . '<br/>';
                $result .= '</li>';

                $result .= '<li>';
                $result .= "Module between $numberA % $numberB = " . ($numberA % $numberB) . '<br/>';
                $result .= '</li>';

                $result .= '</ol>';

                if ($bold != false) {
                    echo '</b>';
                }
            }
            return $result;
        }

        if (isset($_GET["numberA"]) && isset($_GET["numberB"])) {
            $numberA = $_GET["numberA"];
            $numberB = $_GET["numberB"];
            echo basicCalculator($numberA, $numberB, false);
        } else {
            echo 'Insert the query params numberA and numberB' . '<br/>';
        }
        ?>
        <hr>

        <h3>Functions in PHP - Return a color</h3>
        <?php

        function getColor($firstLetter = 'R') {
            $result = '<h4>';
            switch ($firstLetter) {
                case 'R':
                    $result .= 'RED' . '</h4>';
                    break;
                case 'G':
                    $result .= 'GREEN' . '</h4>';
                    break;
                case 'B':
                    $result .= 'BLUE' . '</h4>';
                    break;
                default:
                    $result .= 'RED' . '</h4>';
                    break;
            }
            return $result;
        }

        if (!isset($_GET["color"])) {
            echo 'Insert the query param color' . '<br/>';
        } else {
            $firstLetter = (string) $_GET["color"];
            echo "The color of $firstLetter is: " . getColor($firstLetter);
        }
        ?>
        <hr>

        <h3>Functions in PHP - Function into another</h3>
        <?php

        function getNames($firstName, $lastName) {
            $result = '<h4>';
            $result .= getFullName($firstName, $lastName);
            $result .= '</h4>';
            return $result;
        }

        function getFullName($firstName, $lastName) {
            return $firstName . ' ' . $lastName;
        }

        if (!isset($_GET["firstName"]) && isset($_GET["lastName"])) {
            echo 'Insert the query params firstName and lastName' . '<br/>';
        } else {
            $firstName = (string) $_GET["firstName"];
            $lastName = (string) $_GET["lastName"];
            echo "Your fullName is: " . getNames($firstName, $lastName);
        }
        ?>
        <hr>

    </body>
</html>
