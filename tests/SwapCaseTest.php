<?php

declare(strict_types=1);

use ChangeCase\SwapCase;
use PHPUnit\Framework\TestCase;

final class SwapCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @dataProvider dataProvider
     */
    public function testConvert(
        string $before,
        string $after
    ): void {
        $this->assertEquals($after, SwapCase::convert($before));
    }

    public function dataProvider(): array
    {
        return [
            [(string)null, ''],
            ['test', 'TEST'],
            ['TEST', 'test'],
            ['PascalCase', 'pASCALcASE'],
            ['Iñtërnâtiônàlizætiøn', 'iÑTËRNÂTIÔNÀLIZÆTIØN'],
        ];
    }
}
