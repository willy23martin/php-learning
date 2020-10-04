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
        $email = isset($_POST['email']) ? trim(mysqli_real_escape_string($database_connection, $_POST['email'])) : 'Not specified';
        $password = isset($_POST['password']) ? trim(mysqli_real_escape_string($database_connection, $_POST['password'])) : 'passwordde16caracteres';
        $validationMessage = validateInputs($email, $password);
        // var_dump($validationMessage);
        if (count($validationErrorData) > 0) {
            $validationResult = "A registration validation error was happened. Please, check the form input values you filled and try again. \n" . $validationMessage;
            //var_dump($validationResult);
            $_SESSION['validationErrors'] = $validationResult;
            // header('locaton: index.php');
        } else {
//            var_dump($validationMessage);
            loginUser($email, $password);
            $validationResult = "Your registration was successful with the following account data: \n" . $validationMessage;
            // var_dump($validationResult);
        }
        /*
          var_dump($validationMessage);
          var_dump($validationErrorData);
          var_dump(count($validationErrorData));
          var_dump($validationResult); */
    }

    /**
     * Login a new user in the user database with the password encrypted.
     * @param type $email
     * @param type $password
     */
    function loginUser($email, $password) {
        $encrypted_password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
        var_dump($encrypted_password);
        var_dump(password_verify($password, $encrypted_password));
        $result = dbLoginUser($email, $encrypted_password);
        if ($result && mysqli_num_rows($result)==1) {
            $user = mysqli_fetch_assoc($result);
            $password_verification= password_verify($encrypted_password, $user['str_password']);
            if($password_verification){
                $_SESSION['user'] = $user;
            } else {
                $_SESSION['loginError']='Not good login';
            }
            
            
            
        } else {
            $_SESSION['validationErrors'] = "Please fill the fields with valid credentials.";
        }
        var_dump($_SESSION);
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
    function validateInputs($email, $password) {
        global $validationMessage;
        $validationMessage = validateInputEmail($email) . "\n" .
                validateInputPassword($password);
        // var_dump($validationMessage);
        return $validationMessage;
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
<form action="../../../02-MasterPHP/php-project/client/index.php?exit=true" method="GET">
    <input type="submit" value="Exit">
</form>

