<?php

function credentialsCheck($username, $email, $password) {
    if (!empty($username)) {
        if (!empty($email)) {
            if (!empty($password)) {
                if (strlen($username) < 20) {
                    if (ctype_alnum($username) === true) {
                        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            return true;
                        } else {
                            return "Invalid email";
                        }
                    } else {
                        return "Username non-alphanumeric";
                    }
                } else {
                    return "Username too long";
                }
            } else {
                return "No password";
            }
        } else {
            return "No email";
        }
    } else {
        return "No username";
    }
}




