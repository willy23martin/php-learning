<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>File Management</title>
    </head>
    <body>
        <h3>File Management</h3>
        <?php
        // Open file:
        $openFile = fopen("file.txt", 'a+'); // Read and write = a+
        echo 'File exists: ' . file_exists("file.txt");
        //Read content:
        while (!feof($openFile)) {
            $content = fgets($openFile);
            echo "File content $content" . '<br/>';
        }
        // Write file:
        fwrite($openFile, "New text in the file");
        // Close file
        fclose($openFile);

        // Copy file
        copy("file.txt", "file_copied.txt");
        copy("file.txt", "file_copied1.txt");
        rename("file_copied.txt", "file2.txt");
        unlink("file2.txt");
        ?>

    </body>
</html>
