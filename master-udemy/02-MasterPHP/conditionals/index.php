<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Conditionals</title>
    </head>
    <body>
        <h3>Comparison operators:</h3>
        <ol>
            <li>Equal: ==</li>
            <li>Same/Identical: ===</li>
            <li>Different: != or <> </li>
            <li>Not Same/Not Identical: !==</li>
            <li>Less than: < </li>
            <li>Greater than: > </li>
            <li>Less than or equal to: <= </li>
            <li>Greater than or equal to: >= </li>
        </ol>
        <hr>

        <h3>IF - Conditional</h3>
        <p>
            $campaign = "preview";<br>
            if ($campaign == "preview") {<br>
            echo "The campaign is PREVIEW";<br>
            } else {<br>
            echo 'The campaign is not PREVIEW';<br>
            }<br>
        </p>
        <?php
        /*
         * Comparison operators:
         * ==
         * ===
         * !=
         * <>
         * !==
         * <
         * >
         * <=
         * >=
         */
        $campaign = "preview";
        if ($campaign == "preview") {
            echo "The campaign is PREVIEW" . '<br>';
        } else {
            echo 'The campaign is not PREVIEW' . '<br>';
        }
        ?>
        <?php
        $year = 2020;
        if ($year == 2019) {
            echo 'We are in 2019';
        } else {
            echo 'We are not in 2019';
        }
        ?>
        <hr>

        <h3>ELSEIF - Conditional</h3>
        <p>
            if ($day == 1) {<br>
            echo "Today is Monday";<br>
            } elseif ($day == 2) {<br>
            echo "Today is Tuesday";<br>
            } else {<br>
            echo "Today is Weekend";<br>
            }
        </p>
        <?php
        $day = 3;
        if ($day == 1) {
            echo "Today is Monday" . '<br>';
        } elseif ($day == 2) {
            echo "Today is Tuesday" . '<br>';
        } elseif ($day == 3) {
            echo "Today is Wednesday" . '<br>';
        } elseif ($day == 4) {
            echo "Today is Thursday" . '<br>';
        } elseif ($day == 5) {
            echo "Today is Friday" . '<br>';
        } else {
            echo "Today is Weekend" . '<br>';
        }
        ?>
        <hr>

        <h3>Conditional Operators</h3>
        <ol>
            <li>
                <strong>AND:</strong> !$country == "Italy" && !$country == "Greece"
            </li><br>
            <?php
            $country = "Italy";
            if (!$country == "Italy" && !$country == "Greece") {
                echo 'It is not Greco-Roman.' . '<br>';
            } else {
                echo 'It is Greco-Roman.' . '<br>';
            }
            ?>
            <li>
                <strong>OR:</strong> $country == "Italy" || $country == "Greece"
            </li><br>
            <?php
            if ($country == "Italy" || $country == "Greece") {
                echo 'It is Greco-Roman.' . '<br>';
            } else {
                echo 'It is not Italia.' . '<br>';
            }
            ?>
            <li>
                <strong>NOT:</strong> !$country == "Italy"
            </li><br>
            <?php
            if (!$country == "Italia") {
                echo 'It is not Italia.' . '<br>';
            } else {
                echo 'It is Italia.' . '<br>';
            }
            ?>
        </ol>
        <hr>

        <h3>SWITCH - Conditional</h3>
        <p>
            switch ($day) {<br>
            case 1:<br>
            echo "Today is Monday";<br>
            break;<br>
            case 2:<br>
            echo "Today is Tuesday";<br>
            break;<br>
        </p>
        <?php
        switch ($day) {
            case 1:
                echo "Today is Monday" . '<br>';
                break;
            case 2:
                echo "Today is Tuesday" . '<br>';
                break;
            case 3:
                echo "Today is Wednesday" . '<br>';
                break;
            case 4:
                echo "Today is Thursday" . '<br>';
                break;
            case 5:
                echo "Today is Friday" . '<br>';
                break;
            default:
                echo "Today is Weekend" . '<br>';
        }
        ?>
        <hr>

        <h3>GOTO - Instruction</h3>
        <p>
            goto tag;<br>
            echo "This is not the tag from goto instruction";<br>
            tag:<br>
            echo "This is the tag from goto instruction";<br>
        </p>
        <?php
        goto tag;
        echo "This is not the tag from goto instruction";
        tag:
        echo "This is the tag from goto instruction";
        ?>
        <hr>

    </body>
</html>
