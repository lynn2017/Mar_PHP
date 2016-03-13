<?php

require_once("validators.php");

function validateCredentials($form) {
    $errors = [];

    $userName = $form["userName"];//USE filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $form["password"];

    $userNameValid = validate($userName, 4);
    if (!$userNameValid) {
        $errors["userName"] = "User name is required and should have at least 4 characters";
    }

    $passwordValid = validate($password, 4);
    if (!$passwordValid) {
        $errors["password"] = "Password is required and should have at least 4 characters";
    }

    return $errors;
}

?>