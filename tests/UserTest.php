<?php
declare(strict_types=1);
use Source\User;

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testIsFirstUserNameSameAsSecondUserName(): void
    {
        $first = new User('Wiktor', 'wiktor@gmail.com');
        $second = new User('Wiktor', 'wiktor@gmail.com');

        self::assertEquals($first->getName(), $second->getName());
    }
}
