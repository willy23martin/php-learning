<?php

// ALTER USER '<user>'@'<IP>' IDENTIFIED WITH mysql_native_password BY '<password>'
$host = "";
$user = "";
$password = "";
$database = "";
$port = 0000;
$database_connection = mysqli_connect($host, $user, $password, $database, $port);
if (mysqli_connect_errno()) {
    echo "The connection could not be established";
} else {
    // echo "The connection was established";
}

$query = "SET NAMES 'utf8'";
mysqli_query($database_connection, $query);

function dbRegisterNewUser($name, $cellphone, $email, $encrypted_password) {
    global $database_connection;
    $newUserId = random_int(100, 999);
    $newUserQuery = "INSERT INTO pdg_user VALUES(" . $newUserId . "," . "'$name'" . "," . "'$email'" . "," . "'$encrypted_password'" . "," . "null" . "," . "null" . ");";
    $queryExec = mysqli_query($database_connection, $newUserQuery);
    if (mysqli_error($database_connection)) {
        var_dump(mysqli_error($database_connection));
        die();
    }
    return $queryExec;
}

function dbLoginUser($email) {
    global $database_connection;
    $loginUserQuery = "SELECT * FROM pdg_user AS user WHERE user.str_email = '" . $email . "';";
    $queryExec = mysqli_query($database_connection, $loginUserQuery);
    if (mysqli_error($database_connection)) {
        var_dump(mysqli_error($database_connection));
        die();
    }
    return $queryExec;
}
