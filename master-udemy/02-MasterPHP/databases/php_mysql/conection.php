<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$host = "localhost";
$user = "wchavez";
$password = "Gns1234";
$database = "master-php";
$port = 3308;
$connection = mysqli_connect(
        $host, $user, $password, $database, $port
);
if (mysqli_connect_errno()) {
    echo "The connection could not be established";
} else {
    echo "The connection was established";
}

$query = "SET NAMES 'utf8'";
mysqli_query($connection, $query);

// Consultar notas:
$notesQuery = "SELECT * FROM notas";
$databaseNotes = mysqli_query($connection, $notesQuery);
var_dump($databaseNotes);

// $notesResult = mysqli_fetch_assoc($databaseNotes);
while ($note = mysqli_fetch_assoc($databaseNotes)) {
    var_dump($note);
}

$insertNoteQuery = mysqli_query($connection, "INSERT INTO notas VALUES (2,'Nota desde PHP', 'Nota demo desde PHP', 'green')");
var_dump($insertNoteQuery);
if ($insertNoteQuery) {
    echo 'La nota se insertó correctamente';
} else {
    echo 'Error: ' . mysqli_error($connection);
}