<?php

declare(strict_types=1);

use ChangeCase\SwapCase;
use PHPUnit\Framework\TestCase;

final class SwapCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @param string $locale
     *
     * @dataProvider dataProvider
     */
    public function testConvert(
        string $before,
        string $after,
        string $locale = null
    ): void {
        $this->assertEquals($after, SwapCase::convert($before, $locale));
    }

    public function dataProvider(): array
    {
        return [
            [(string)null, ''],
            ['test', 'TEST'],
            ['TEST', 'test'],
            ['PascalCase', 'pASCALcASE'],
            ['Iñtërnâtiônàlizætiøn', 'iÑTËRNÂTIÔNÀLIZÆTIØN'],
            ['My String', 'mY sTRİNG', 'tr'],
        ];
    }
}
