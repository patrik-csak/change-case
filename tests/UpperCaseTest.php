<?php

declare(strict_types=1);

use ChangeCase\UpperCase;
use PHPUnit\Framework\TestCase;

final class UpperCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @param string $locale
     *
     * @dataProvider convertStringProvider
     * @dataProvider convertUnicodeProvider
     * @dataProvider convertWithLocaleProvider
     */
    public function testConvert(
        string $before,
        string $after,
        string $locale = null
    ) {
        $this->assertEquals($after, UpperCase::convert($before, $locale));
    }

    public function testConvertWithLocale()
    {
        $this->assertEquals("\u{0130}", UpperCase::convert('i', 'tr'));
    }

    /**
     * @param string $string
     * @param bool $expected
     *
     * @dataProvider isUpperProvider
     */
    public function testIs(string $string, bool $expected)
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

    public function convertWithLocaleProvider(): array
    {
        return [['i', "\u{0130}", 'tr']];
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
