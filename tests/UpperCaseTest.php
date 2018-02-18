<?php

declare(strict_types=1);

use ChangeCase\UpperCase;
use PHPUnit\Framework\TestCase;

final class UpperCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @dataProvider stringProvider
     * @dataProvider unicodeProvider
     */
    public function testConvert(
        string $before,
        string $after
    ): void {
        $this->assertEquals($after, UpperCase::convert($before));
    }

    public function stringProvider(): array
    {
        return [
            [(string)null, ''],
            ['test', 'TEST'],
            ['TEST', 'TEST'],
            ['string', 'STRING'],
        ];
    }

    public function unicodeProvider(): array
    {
        return [["\u{0131}", 'I']];
    }
}
