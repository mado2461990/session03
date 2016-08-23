<?php

use PHPUnit\Framework\TestCase;

class AuthTest extends TestCase
{
    public function testUserCanLoginUsingUsernameAndPassword()
    {
        $auth = new Auth();

        $user = new User();
        $user->username = "Mohammed S Shurrab";
        $user->password = "TDD!@#$%^&*(";

        $this->assertEquals(true,$auth->login($user));
    }
}
