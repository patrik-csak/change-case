<?php

declare(strict_types=1);

use ChangeCase\LowerCase;
use PHPUnit\Framework\TestCase;

final class LowerCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @dataProvider convertProvider
     */
    public function testConvert(
        string $before,
        string $after
    ): void {
        $this->assertEquals($after, LowerCase::convert($before));
    }

    /**
     * @param string $string
     * @param bool $expected
     * @dataProvider isProvider
     */
    public function testIs(string $string, bool $expected): void
    {
        $this->assertEquals($expected, LowerCase::is($string));
    }

    public function convertProvider(): array
    {
        return [
            [(string)null, ''],
            ['TEST', 'test'],
            ['test', 'test'],
        ];
    }

    public function isProvider(): array
    {
        return [
            ['test', true],
            ['TEST', false],
            ['Test', false],
        ];
    }
}
