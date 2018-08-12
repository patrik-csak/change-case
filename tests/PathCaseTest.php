<?php

declare(strict_types=1);

use ChangeCase\PathCase;
use PHPUnit\Framework\TestCase;

final class PathCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @param string $locale
     *
     * @dataProvider localeProvider
     * @dataProvider mixedCaseProvider
     * @dataProvider nonAlphanumericSeparatorsProvider
     * @dataProvider nonAsciiProvider
     * @dataProvider sentenceCaseProvider
     * @dataProvider singleWordProvider
     */
    public function testConvert(
        string $before,
        string $after,
        string $locale = null
    ) {
        $this->assertEquals($after, PathCase::convert($before, $locale));
    }

    public function localeProvider(): array
    {
        return [['MY STRING', 'my/strıng', 'tr']];
    }

    public function mixedCaseProvider(): array
    {
        return [
            ['TestString', 'test/string'],
            ['TestString1_2_3', 'test/string1/2/3'],
        ];
    }

    public function nonAlphanumericSeparatorsProvider(): array
    {
        return [
            ['path.case', 'path/case'],
            ['path/case', 'path/case'],
        ];
    }

    public function nonAsciiProvider(): array
    {
        return [['My Entrée', 'my/entrée']];
    }

    public function sentenceCaseProvider(): array
    {
        return [
            ['test string', 'test/string'],
            ['Test String', 'test/string'],
        ];
    }

    public function singleWordProvider(): array
    {
        return [
            ['test', 'test'],
            ['TEST', 'test'],
        ];
    }
}
