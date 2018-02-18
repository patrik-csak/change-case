<?php

declare(strict_types=1);

use ChangeCase\UpperCase;
use PHPUnit\Framework\TestCase;

final class UpperCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @dataProvider convertStringProvider
     * @dataProvider convertUnicodeProvider
     */
    public function testConvert(
        string $before,
        string $after
    ): void {
        $this->assertEquals($after, UpperCase::convert($before));
    }

    /**
     * @param string $string
     * @param bool $expected
     * @dataProvider isUpperProvider
     */
    public function testIs(string $string, bool $expected): void
    {
        $this->assertEquals($expected, UpperCase::is($string));
    }

    public function convertStringProvider(): array
    {
        return [
            [(string)null, ''],
            ['test', 'TEST'],
            ['TEST', 'TEST'],
            ['string', 'STRING'],
        ];
    }

    public function convertUnicodeProvider(): array
    {
        return [["\u{0131}", 'I']];
    }

    public function isUpperProvider(): array
    {
        return [
            ['TEST', true],
            ['test', false],
            ['Test', false,],
        ];
    }
}
