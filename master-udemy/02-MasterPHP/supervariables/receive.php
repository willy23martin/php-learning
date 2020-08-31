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
        <?php
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
        // GET:
        /*
          $name = $_GET['name'];
          echo "Name received: " . $name . "<br>";
          $lastName = $_GET['lastName'];
          echo "Last Name received: " . $lastName . "<br>";
          $cellphone = $_GET['cellphone'];
          echo "Cellphone received: " . $cellphone . "<br>";
          $email = $_GET['email'];
          echo "Email received: " . $email . "<br>";
         * 
         */
         var_dump($_GET);
        ?>

        <?php
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */
        // POST:
        $name = $_POST['name'];
        echo "<strong>Name received: </strong>" . $name . "<br>";
        $lastName = $_POST['lastName'];
        echo "<strong>Last Name received: </strong>" . $lastName . "<br>";
        $cellphone = $_POST['cellphone'];
        echo "<strong>Cellphone received: </strong>" . $cellphone . "<br>";
        $email = $_POST['email'];
        echo "<strong>Email received: </strong>" . $email . "<br>";
        var_dump($_POST);
        ?>
    </body>
</html>