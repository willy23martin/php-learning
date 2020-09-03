<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Array-Exercises</title>
    </head>
    <body>
        <?php
        include './functions.php';
        ?>
        <h4>Riferimenti: <a href=https://www.udemy.com/course/master-en-php-sql-poo-mvc-laravel-symfony-4-wordpress>https://www.udemy.com/course/master-en-php-sql-poo-mvc-laravel-symfony-4-wordpress</a></h4>
        <h3>Array Exercise-I</h3>
        <p></p>
        <?php
        $lineSeparator = '<br/>';
        $numbers = array(56, 78, 13, -45, -9, 0, 8, 24);
        echo '<h4>Array elements:</h4>' . $lineSeparator;
        printArrayElements($numbers);

        echo '<h4>Array ordered:</h4>' . $lineSeparator;
        sort($numbers);
        printArrayElements($numbers);

        echo '<h4>Array lenght:</h4>' . $lineSeparator;
        echo count($numbers);

        echo '<h4>Number to search:</h4>' . $lineSeparator;
        if (isset($_GET["number"])) {
            $number = (int) $_GET["number"];
            $index = array_search($number, $numbers);
            echo 'The number is in position: ' . ($index + 1) . '.' . $lineSeparator;
        } else {
            echo 'Insert the query param of the number you want to search in the array.' . '<br/>';
        }
        ?>
        <hr>

        <h3>Array Exercise - II</h3>
        <p>Add values to an array while the array´s lenght is less than 120 an then show it in the screen.</p>
        <?php
        $numberArray = array();
        do {
            $numberArray[] = random_int(0, 100000);
        } while (sizeof($numberArray) < 120);
        var_dump($numberArray);
        ?>
        <hr>

        <h3>Array Exercise - III</h3>
        <?php
        $alphabet = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'ñ', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'x', 'y', 'z');
        if (isset($_GET["word"])) {
            $word = $_GET["word"];
            if (empty($word)) {
                echo "The word was empty, so we nned to fill it:" . $lineSeparator;
                for ($i = rand(1, 5); $i < random_int(5, 28); $i++) {

                    $word .= '<strong>' . strtoupper($alphabet[$i]) . '</strong>';
                }
                echo 'The final word is: ' . $word . $lineSeparator;
            } else {
                echo "The word received was: " . $word . $lineSeparator;
            }
        } else {
            echo 'Insert the query param word.' . '<br/>';
        }
        ?>
        <hr>

        <h3>Array Exercise - IV</h3>
        <?php
        $numberA = 9;
        $stringA = "String A";
        $arrayA = array("A", 45);
        $booleanA = false;
        if (is_numeric($numberA)) {
            echo 'Number A is numeric.' . $lineSeparator;
        }
        if (is_string($stringA)) {
            echo 'String A is string.' . $lineSeparator;
        }
        if (is_array($arrayA)) {
            echo 'Array A is an array.' . $lineSeparator;
        }
        if (is_bool($booleanA)) {
            echo 'Boolean A is boolean' . $lineSeparator;
        }
        ?>
        <hr>

        <h3>Array Exercise - V</h3>
        <?php
        $tableContent = array(
            'singers' => array(
                'Miley',
                'Annalisa',
                'Eros',
                'Arisa'
            ),
            'programmingLanguages' => array(
                'PHP',
                'JS',
                'PYTHON',
                'JAVA'
            )
        );
        var_dump($tableContent);
        echo '<table colspan=3>';
        echo '<tr>';
        echo '<th>Singers</th>';
        echo '<th>Programming Languages</th>';
        echo '</tr>';
        foreach ($tableContent as $key => $value) {
            for ($i = 0; $i < 2; $i++) {
                echo '<tr>';
                echo "<td>$column</td>";
                echo '<td>Programming Languages</td>';
                echo '</tr>';
            }
        }
        echo '</table>'
        ?>
        <hr>

    </body>
</html>
