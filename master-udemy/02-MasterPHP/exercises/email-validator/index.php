<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Exercise - Email Validator</title>
    </head>
    <body>
        <?php

        function validateEmail($email) {
            $validation = "";
            if (isset($email) && !empty($email) && is_string($email) && filter_var(FILTER_VALIDATE_EMAIL)) {
                $validation .= "The email $email was correctly validated." . '<br/>';
            } else {
                $validation .= 'The email received ' . $email . ' is incorrect.' . '<br/>';
            }
            return $validation;
        }

        if (isset($_GET["email"])) {
            $email = $_GET["email"];
            $validation = validateEmail($email);
            echo "<h4>Email validation result: $validation</h4>" . '<br/>';
        } else {
            echo 'Please specify the query param email' . '<br/>';
        }
        ?>
    </body>
</html>
