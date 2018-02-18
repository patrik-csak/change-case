<?php

declare(strict_types=1);

use ChangeCase\UpperCaseFirst;
use PHPUnit\Framework\TestCase;

final class UpperCaseFirstTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @dataProvider stringProvider
     */
    public function testConvert(
        string $before,
        string $after
    ): void {
        $this->assertEquals($after, UpperCaseFirst::convert($before));
    }

    public function stringProvider(): array
    {
        return [
            [(string)null, ''],
            ['test', 'Test'],
            ['TEST', 'TEST'],
        ];
    }
}
