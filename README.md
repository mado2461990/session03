# Introduction to TDD

In our session today, we take a quick introduction about some important topics like `MVC`, `TDD`, `Package Manager`, and we answer some important question like:

* Why to use Pattern, and what is the differenaces between Architectural and Design Patterns
* The relation between Web Life cycle and `MVC` pattern
* What is the problem with the traditional development lifecycle, and how `TDD` and overcome it
* What is the differances between `Unit Test` and `TDD`
* Why we must use `Package Manager` to deal with external dependancies

The next section will show step by step how we develop the TDD sample:

## Globally Install Composer

Nested of installing `Composer` in the project folder, we install composer globally, and add it to the user bin folder, so we can use the `composer` command anywhare using the following command:

```
curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
```

## Project folder and PHPUnit Installation

After installing Composer, we create new folder, and install PHPUnit inside it using composer using the following commands:

```
cd /var/www/html/
mkdir session03
cd session03
composer require "phpunit/phpunit=5.5.*
```

If you successfully installed Composer and PHPUnit, and try to `ls` the folder, you will see new folder called `vendor` and new files called `composer.json` and `composer.lock`, and you can run your PHPUnit using the following command

```
vendor/bin/phpunit
```

## Write our first Test!

To organize our code, we create `tests` folder, where all of our test will live, and we decide to write a sample test about User Login functionallity, so we do the following:

```
mkdir tests
cd tests
gedit AuthTest.php
```

and we write the follwing test class

```php
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
```

After that we run our tests for the first time using the following command:

```
cd ..
vendor/bin/phpunit tests
```

the first line return us back to the main project folder, then the second inform PHPUnit to run any tests found in the tests folder. after this step we start developing our code step by step guided by the `phpunit` results, until the test is passed.

## Important Notes

* Writing tests code is not a simple task, it may lead the developer for good or bad implementation, so we must be carful about our test code, both from functionallity and design point of view.
* Once we write the test, we must not write any single line of code unless we run our test and see what is the first failing purpuse, and try to solve it.
* Repeat the same step, and don't try to finish the overall work and run your test after many modification, this may lead you to a confusing senario, and you may be forced to delete the new code and start again.
* Don't try to write a code more that the test need to passed, once you finished from the current test, write a new one to guide you to complete your development.

## Step by Step Screencast

I will make my best to record a step by step screencast to develop the code that satisfied this test using TDD, currently you can find the complete project code in this repo.
