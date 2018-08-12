<?php

declare(strict_types=1);

use ChangeCase\TitleCase;
use PHPUnit\Framework\TestCase;

final class TitleCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @param string $locale
     *
     * @dataProvider localeProvider
     * @dataProvider nonAlphanumericSeparatorsProvider
     * @dataProvider nonAsciiProvider
     * @dataProvider pascalCaseProvider
     * @dataProvider sentenceCaseProvider
     * @dataProvider singleWordProvider
     */
    public function testConvert(
        string $before,
        string $after,
        string $locale = null
    ) {
        $this->assertEquals($after, TitleCase::convert($before, $locale));
    }

    public function localeProvider(): array
    {
        return [['STRING', 'Strıng', 'tr']];
    }

    public function nonAlphanumericSeparatorsProvider(): array
    {
        return [
            ['dot.case', 'Dot Case'],
            ['path/case', 'Path Case'],
        ];
    }

    public function nonAsciiProvider(): array
    {
        return [['éxample', 'Éxample']];
    }

    public function pascalCaseProvider(): array
    {
        return [
            ['TestString', 'Test String'],
            ['TestString1_2_3', 'Test String1 2 3'],
            ['TestString_1_2_3', 'Test String 1 2 3'],
        ];
    }

    public function sentenceCaseProvider(): array
    {
        return [
            ['test string', 'Test String'],
            ['Test String', 'Test String'],
        ];
    }

    public function singleWordProvider(): array
    {
        return [
            ['test', 'Test'],
            ['TEST', 'Test'],
        ];
    }
}
