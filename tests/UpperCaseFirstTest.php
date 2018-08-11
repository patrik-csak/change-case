<?php

declare(strict_types=1);

use ChangeCase\UpperCaseFirst;
use PHPUnit\Framework\TestCase;

final class UpperCaseFirstTest extends TestCase
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
        $this->assertEquals($after, UpperCaseFirst::convert($before, $locale));
    }

    public function dataProvider(): array
    {
        return [
            [(string)null, ''],
            ['test', 'Test'],
            ['TEST', 'TEST'],
            ['is', 'İs', 'tr'],
        ];
    }
}
