<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Forms in PHP</title>
    </head>
    <body>
        <?php
        if (!empty($_GET["error"])) {
            echo $_GET["error"] . '<br/>';
        }
        ?>
        <h3>Schedule Callback</h3>
        <!--Upload files from client to server-->
        <form action="callback-scheduled.php" method="POST" enctype="multipart/form-data">
            <p>
                <!--Riferimento: https://stackoverflow.com/questions/20633310/how-to-get-random-text-from-lorem-ipsum-in-php-->
                <?php
                $content = file_get_contents('http://loripsum.net/api');
                echo $content;
                ?>
            </p>
            <label for="name">First Name:</label>
            <p><input type="text" name="name" autofocus="autofocus" required placeholder="Put your name"/></p><br/>
            <label for="lastName">Last Name:</label>
            <p><input type="text" name="lastName" autofocus="autofocus" required/></p><br/>
            <label for="cellphone">Cellphone:</label>
            <p><input type="number" name="cellphone" minlength="10" required/></p><br/>
            <label for="email">Email:</label>
            <p><input type="email" name="email" required/></p><br/>
            <label for="date">Callback Date:</label>
            <p><input type="date" name="date" /></p><br/>
            <label for="file">Attachment:</label>
            <p><input type="file" name="file"/></p><br/>

            <p><input type="submit" value="Schedule Callback"/></p><br/>
        </form>
        <?php ?>
    </body>
</html>
