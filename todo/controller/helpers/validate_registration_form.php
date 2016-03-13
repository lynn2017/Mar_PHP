<?php

require_once("validators.php");

function validateRegistrationForm($form) {
    $errors = [];
    
    $firstName = $form["firstName"]; //USE filter_input(INPUT_POST, "firstName", FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = $form["lastName"];
    $userName = $form["userName"];
    $password = $form["password"];        
    
    $firstNameValid = validate($firstName, 1);
    if(!$firstNameValid) {
        $errors["firstName"] = "First name is required";
    }
    
    $lastNameValid = validate($lastName, 1);
    if(!$lastNameValid) {
        $errors["lastName"] = "Last name is required";
    }
    
    $userNameValid = validate($userName, 4);
    if(!$userNameValid) {
        $errors["userName"] = "User name is required and should have at least 4 characters";
    }
    
    $passwordValid = validate($password, 4);
    if(!$passwordValid) {
        $errors["password"] = "Password is required and should have at least 4 characters";
    }
        
    return $errors;
}

?>