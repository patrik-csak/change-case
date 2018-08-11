<?php

declare(strict_types=1);

use ChangeCase\LowerCaseFirst;
use PHPUnit\Framework\TestCase;

final class LowerCaseFirstTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     *
     * @dataProvider stringProvider
     */
    public function testConvert(
        string $before,
        string $after,
        string $locale = null
    ): void {
        $this->assertEquals($after, LowerCaseFirst::convert($before, $locale));
    }

    public function stringProvider(): array
    {
        return [
            [(string)null, ''],
            ['Test', 'test'],
            ['TEST', 'tEST'],
            ['İs', 'is', 'tr'],
        ];
    }
}
