<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Schedule Callback</title>
    </head>
    <body>
        <h3>Your callback was scheduled</h3>
        <?php
        include './form-validator.php';
        $callbackScheduleFormError = validateForm();
        if (empty($callbackScheduleFormError)) {
            $callbackData = array(
                'name' => $_POST["name"],
                'lastName' => $_POST["lastName"],
                'cellphone' => $_POST["cellphone"],
                'email' => $_POST["email"]
            );
            var_dump($callbackData);
        } else {
            header("Location:index.php?error=" . $callbackScheduleFormError . '<br/>');
        }
        ?>
        <!--File uploading-->
        <?php
        $fileUploaded = $_FILES["file"];
        var_dump($fileUploaded);
        $name = $fileUploaded['name'];
        $type = $fileUploaded['type'];
        if ($type == "image/jpg" || $type == "image/jpeg" || $type == "image/png" || $type == "image/gif") {
            if (!is_dir("uploadedImages")) {
                mkdir("uploadedImages", 0777);
            }
            move_uploaded_file($fileUploaded['tmp_name'], "uploadedImages/" . $name,);
            header("Refresh: 5; URL=index.php");
            echo "File $name was uploaded" . '<br/>';
        } else {
            header("Refresh: 5; URL=index.php");
            echo 'Upload a file with a correct format.' . '<br/>';
        }
        ?>
    </body>
</html>
