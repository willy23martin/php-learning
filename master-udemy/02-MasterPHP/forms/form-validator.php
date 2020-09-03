<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function validateForm() {
    $errorMessage = "";
    if (!is_string($_POST["name"]) || !preg_match("/[a-zA-Z]+/", $_POST["name"])) {
        $errorMessage .= "Please fill your name with a correct value" . '<br/>';
    }
    if (!is_string($_POST["lastName"]) || !preg_match("/[a-zA-Z]+/", $_POST["lastName"])) {
        $errorMessage .= "Please fill your lastName with a correct value" . '<br/>';
    }
    if (!is_numeric($_POST["cellphone"]) || !filter_var($_POST["cellphone"], FILTER_VALIDATE_INT) || strlen($_POST["cellphone"]) < 10) {
        $errorMessage .= "Please fill your cellphone with a correct value" . '<br/>';
    }
    if (!is_string($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errorMessage = "Please fill your email with a correct value" . '<br/>';
    }
    return $errorMessage;
}
