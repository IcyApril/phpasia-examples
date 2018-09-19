<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 15/09/2018
 * Time: 15:18
 */

namespace Junade\AutomatedTesting;

class CredentialsCheck {
    private $errors = [];

    /**
     * CredentialsCheck constructor.
     * @param $username
     * @param $email
     * @param $password
     * @Contract\Verify("is-string")
     */
    function __construct($username, $email, $password)
    {
        $emailValidation = $this->validateEmail($email);
        if ($emailValidation !== true) {
            array_push($this->errors, $emailValidation);
        }

        $usernameValidation = $this->validateUsername($username);
        if ($usernameValidation !== true) {
            array_push($this->errors, $usernameValidation);
        }

        if (empty($password)) {
            array_push($this->errors, "No password");
        }

    }

    public function getErrors() {
        return $this->errors;
    }

    public function isValid() {
        return empty($this->errors);
    }

    private function validateEmail($email) {
        if (empty($email)) {
            return "No email";
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            return "Invalid email";
        }

        return true;
    }

    private function validateUsername($username) {
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
}