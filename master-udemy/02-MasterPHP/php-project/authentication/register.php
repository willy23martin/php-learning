<div id="message">

    <?php
    include_once '../client/includes/database.php';
    ?>
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }

    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     * 
     * Security mechanisms:
     * - Against SQLInjection: mysqli_real_escape_string - get the complete input and interpretate it as a String.
     */
    $validationErrorData = array();
    $validationResult = "";
    $validationMessage = "";
    if (isset($_POST['submit'])) {
        $name = isset($_POST['name']) ? trim(mysqli_real_escape_string($database_connection, $_POST['name'])) : 'Not specified';
        $cellphone = isset($_POST['cellphone']) ? trim(mysqli_real_escape_string($database_connection, $_POST['cellphone'])) : 'Not specified';
        $email = isset($_POST['email']) ? trim(mysqli_real_escape_string($database_connection, $_POST['email'])) : 'Not specified';
        $password = isset($_POST['password']) ? trim(mysqli_real_escape_string($database_connection, $_POST['password'])) : 'passwordde16caracteres';
        $validationMessage = validateInputs($name, $cellphone, $email, $password);
        // var_dump($validationMessage);
        if (count($validationErrorData) > 0) {
            $validationResult = "A registration validation error was happened. Please, check the form input values you filled and try again. \n" . $validationMessage;
            //var_dump($validationResult);
            $_SESSION['validationErrors'] = $validationResult;
            // header('locaton: index.php');
        } else {
//            var_dump($validationMessage);
            registerNewUser($name, $cellphone, $email, $password);
            $validationResult = "Your registration was successful with the following account data: \n" . $validationMessage;
            //var_dump($validationResult);
        }
        /*
          var_dump($validationMessage);
          var_dump($validationErrorData);
          var_dump(count($validationErrorData));
          var_dump($validationResult); */
    }

    /**
     * Register a new user in the user database with the password encrypted.
     * @param type $name
     * @param type $cellphone
     * @param type $email
     * @param type $password
     */
    function registerNewUser($name, $cellphone, $email, $password) {
        $encrypted_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        var_dump($encrypted_password);
        var_dump(password_verify($password, $encrypted_password));
        $result = dbRegisterNewUser($name, $cellphone, $email, $encrypted_password);
        if ($result) {
            $_SESSION['newRegistrationCompleted'] = "New registration was completed";
        } else {
            $_SESSION['validationErrors'] = "New registration was NOT completed";
        }
    }

    /**
     * Validate all the inputs received in the POST request.
     * @global string $validationMessage
     * @param type $name
     * @param type $cellphone
     * @param type $email
     * @param type $password
     * @return string
     */
    function validateInputs($name, $cellphone, $email, $password) {
        global $validationMessage;
        $validationMessage = validateInputName($name) . "\n" .
                validateInputCellphone($cellphone) . "\n" .
                validateInputEmail($email) . "\n" .
                validateInputPassword($password);
        // var_dump($validationMessage);
        return $validationMessage;
    }

    /**
     * Validate the name received in the registration POST request.
     * @global array $validationErrorData
     * @param type $name
     * @return string
     */
    function validateInputName($name) {
        $nameValidationMessage = '';
        if (!empty($name) && !is_numeric($name)) {
            $nameValidationMessage = " with the username: {$name}. \n";
        } else {
            $nameValidationMessage = "The name specified was not valid.\n";
            global $validationErrorData;
            $validationErrorData['nameValidationMessage'] = $nameValidationMessage;
        }
        // var_dump($nameValidationMessage);
        return $nameValidationMessage;
    }

    /**
     * Validate the cellphone received by the POST request - Format E.164.
     * Riferimenti:
     * - https://stackoverflow.com/questions/3747362/php-regex-validation
     * - https://stackoverflow.com/questions/6478875/regular-expression-matching-e-164-formatted-phone-numbers
     * @global array $validationErrorData
     * @param type $cellphone
     * @return string
     */
    function validateInputCellphone($cellphone) {
        $cellphoneValidationMessage = '';
        if (!empty($cellphone) && preg_match('/^\+?[1-9]\d{1,14}$/', $cellphone)) {
            $cellphoneValidationMessage = " with the cellphone (E.164 format): {$cellphone}. \n";
        } else {
            $cellphoneValidationMessage = "The celphone specified was not valid. It must be in E.164 format. \n";
            global $validationErrorData;
            $validationErrorData['cellphoneValidationMessage'] = $cellphoneValidationMessage;
        }
        return $cellphoneValidationMessage;
    }

    /**
     * Validate the email received in the registration POST request.
     * @global array $validationErrorData
     * @param type $email
     * @return string
     */
    function validateInputEmail($email) {
        $emailValidationMessage = '';
        if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailValidationMessage = "with the email: {$email}. \n";
        } else {
            $emailValidationMessage = "The email specified was not valid. It must be in a correct email format. \n";
            global $validationErrorData;
            $validationErrorData['emailValidationMessage'] = $emailValidationMessage;
        }
        return $emailValidationMessage;
    }

    /**
     * Validate the password received in the registration POST request.
     * @global array $validationErrorData
     * @param type $password
     * @return string
     */
    function validateInputPassword($password) {
        $passwordValidationMessage = '';
        if (empty($password) || strlen($password) < 16) {
            // var_dump($password);
            $passwordValidationMessage = "The password specified was not valid. It must have at least 16 characters. \n";
            global $validationErrorData;
            $validationErrorData['passwordValidationMessage'] = $passwordValidationMessage;
        }
        return $passwordValidationMessage;
    }
    ?>
    <?= $validationResult; ?>
</div>
<form action="../../../02-MasterPHP/php-project/client/index.php" method="GET">
    <input type="submit" value="Back to Main Page">
</form>

