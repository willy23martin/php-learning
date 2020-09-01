<?php
$result = false;
if (isset($_POST["numberA"]) && isset($_POST["numberB"])) {
    $numberA = $_POST["numberA"];
    $numberB = $_POST["numberB"];
    if (isset($_POST["add"])) {
        $result = $numberA + $numberB;
    }
    if (isset($_POST["subs"])) {
        $result = $numberA - $numberB;
    }
    if (isset($_POST["mult"])) {
        $result = $numberA * $numberB;
    }
    if (isset($_POST["div"])) {
        if ($numberB == 0) {
            $result = "undefined";
        } else {
            $result = $numberA / $numberB;
        }
    }
} else {
    echo "Please define numberA and numberB numbers. <br/>";
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise-Online Calculator</title>
    </head>
    <body>
        <h3>Exercise - Online Calculator</h3>
        <form action="" method="POST">
            <label for="numberA">Number A: </label>
            <p><input type="number" placeholder="Insert numberA" name="numberA" required/></p><br/>
            <label for="numberB">Number B: </label>
            <p><input type="number" placeholder="Insert numberB" name="numberB" required/></p><br/>
            <table colspan="2" border="1">
                <tr>
                    <th>Addition</th>
                    <th>Substraction</th>
                    <th>Multiplication</th>
                    <th>Division</th>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="+" name="add"/>
                    </td>
                    <td>
                        <input type="submit" value="-" name="subs"/>
                    </td>
                    <td>
                        <input type="submit" value="*" name="mult"/>
                    </td>
                    <td>
                        <input type="submit" value="/" name="div"/>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if ($result != false) {
            echo "<h4>Result: $result</h4>";
        }
        ?>
        <hr>
    </body>
</html>
