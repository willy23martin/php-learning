<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function printArrayElements($numbers) {
    echo '<ol>';
    foreach ($numbers as $number) {
        echo "<li>$number</li>";
    }
    echo '</ol>';
}
