<?php

function credentialsCheck($username, $email, $password) {
    $emailValidation = validateEmail($email);
    if ($emailValidation !== true) {
        return $emailValidation;
    }

    $usernameValidation = validateUsername($username);
    if ($usernameValidation !== true) {
        return $usernameValidation;
    }

    if (empty($password)) {
        return "No password";
    }

    return true;
}

function validateEmail($email) {
    if (empty($email)) {
        return "No email";
    }

    if (filter_var($email, FILTER_VALIDATE_EMAIL) !== true) {
        return "Invalid email";
    }

    return true;
}

function validateUsername($username) {
    if (empty($username)) {
        return "No username";
    }

    if (strlen($username) >= 20) {
        return "Username too long";
    }

    if (ctype_alnum($username) !== true) {
        return "Username non-alphanumeric";
    }

    return true;
}


