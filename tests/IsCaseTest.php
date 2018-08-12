<?php

declare(strict_types=1);

use ChangeCase\IsCase;
use PHPUnit\Framework\TestCase;

final class IsCaseTest extends TestCase
{
    public function testIsUpperCase(): void
    {
        $this->assertTrue(IsCase::upper('ALLUPPERCASE'));
        $this->assertFalse(IsCase::upperCase('NotAllUpperCase'));
        $this->assertFalse(IsCase::upperCase('alllowercase'));
    }

    public function testIsLowerCase(): void
    {
        $this->assertFalse(IsCase::lower('ALLUPPERCASE'));
        $this->assertFalse(IsCase::lowerCase('NotAllUpperCase'));
        $this->assertTrue(IsCase::lowerCase('alllowercase'));
    }
}
