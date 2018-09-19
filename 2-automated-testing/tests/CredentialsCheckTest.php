<?php
/**
 * Created by PhpStorm.
 * User: junade
 * Date: 19/09/2018
 * Time: 18:38
 */

namespace Junade\AutomatedTesting;

use PHPUnit\Framework\TestCase;

class CredentialsCheckTest extends TestCase
{
    public function testGetErrors() {
        $checker = new CredentialsCheck("test", "test@example.com", "weak_password");
        $this->assertCount(0, $checker->getErrors());

        $checker = new CredentialsCheck("test", "email@-domain.com", "weak_password");
        $errors = $checker->getErrors();
        $this->assertCount(1, $errors);
        $this->assertContains("Invalid email", $errors);

        $checker = new CredentialsCheck("test", "", "weak_password");
        $errors = $checker->getErrors();
        $this->assertCount(1, $errors);
        $this->assertContains("No email", $errors);

        $checker = new CredentialsCheck("", "test@example.com", "weak_password");
        $errors = $checker->getErrors();
        $this->assertCount(1, $errors);
        $this->assertContains("No username", $errors);

        $checker = new CredentialsCheck("1234567890qwertyuiopasdfghjklzxcvbnm", "test@example.com", "weak_password");
        $errors = $checker->getErrors();
        $this->assertCount(1, $errors);
        $this->assertContains("Username too long", $errors);

        $checker = new CredentialsCheck("test,,,#£", "test@example.com", "weak_password");
        $errors = $checker->getErrors();
        $this->assertCount(1, $errors);
        $this->assertContains("Username non-alphanumeric", $errors);

        $checker = new CredentialsCheck("test", "", "");
        $errors = $checker->getErrors();
        $this->assertCount(2, $errors);
        $this->assertContains("No email", $errors);
        $this->assertContains("No password", $errors);
    }

    public function testIsValid() {
        $checker = new CredentialsCheck("test", "test@example.com", "weak_password");
        $this->assertTrue($checker->isValid());

        $checker = new CredentialsCheck("", "test@example.com", "weak_password");
        $this->assertFalse($checker->isValid());

        $checker = new CredentialsCheck("test", "test@-----example.com", "weak_password");
        $this->assertFalse($checker->isValid());

        $checker = new CredentialsCheck("test", "test@-----example.com", "");
        $this->assertFalse($checker->isValid());
    }
}
