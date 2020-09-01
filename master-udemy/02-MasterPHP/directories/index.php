<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Directory Management</title>
    </head>
    <body>
        <h3>Directory Management</h3>
        <?php
        if (!is_dir("new_folder")) {
            mkdir("new_folder", 0777) or die("It was not possible to create the new directory");
        } else {
            echo 'Folder already exists';
        }
        if ($manager = opendir("../files")) {
            while (($openFile = readdir($manager)) !== false) {
                echo "File: $openFile".'<br/>';
            }
        }
        ?>
    </body>
</html>
