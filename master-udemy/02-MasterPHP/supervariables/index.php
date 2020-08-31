<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Server Variables</h3>
        <?php
        echo "<ol>";

        echo '<li>';
        echo '<strong>Server IP Address:</strong> ' . $_SERVER["SERVER_ADDR"];
        echo '</li>';

        echo '<li>';
        echo '<strong>Server Name: </strong>' . $_SERVER["SERVER_NAME"];
        echo '</li>';

        echo '<li>';
        echo '<strong>Server Apache Version: </strong>' . $_SERVER["SERVER_SOFTWARE"];
        echo '</li>';
        
        echo '<li>';
        echo '<strong>Server Client-Browser Supported: </strong>' . $_SERVER["HTTP_USER_AGENT"];
        echo '</li>';

        echo '<li>';
        echo '<strong>Server Client-IP: </strong>' . $_SERVER["REMOTE_ADDR"];
        echo '</li>';
        
        echo "</ol>";
        ?>
        <hr>
    </body>
</html>
