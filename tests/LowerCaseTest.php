<?php

declare(strict_types=1);

use ChangeCase\LowerCase;
use PHPUnit\Framework\TestCase;

final class LowerCaseTest extends TestCase
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
        $this->assertEquals($after, LowerCase::convert($before));
    }

    public function stringProvider(): array
    {
        return [
            [(string)null, ''],
            ['TEST', 'test'],
            ['test', 'test'],
        ];
    }
}
