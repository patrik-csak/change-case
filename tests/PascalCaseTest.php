<?php

declare(strict_types=1);

use ChangeCase\PascalCase;
use PHPUnit\Framework\TestCase;

final class PascalCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @param string $locale
     * @param bool $mergeNumbers
     *
     * @dataProvider localeProvider
     * @dataProvider mergeNumbersProvider
     * @dataProvider nonAlphanumericSeparatorsProvider
     * @dataProvider pascalCaseProvider
     * @dataProvider sentenceCaseProvider
     * @dataProvider singleWordProvider
     */
    public function testConvert(
        string $before,
        string $after,
        string $locale = null,
        bool $mergeNumbers = false
    ) {
        $this->assertEquals(
            $after,
            PascalCase::convert($before, $locale, $mergeNumbers)
        );
    }

    public function localeProvider(): array
    {
        return [['my STRING', 'MyStrıng', 'tr']];
    }

    public function mergeNumbersProvider(): array
    {
        return [['test 1 2 3', 'Test123', null, true]];
    }

    public function nonAlphanumericSeparatorsProvider(): array
    {
        return [
            ['dot.case', 'DotCase'],
            ['path/case', 'PathCase'],
        ];
    }

    public function pascalCaseProvider(): array
    {
        return [['TestString', 'TestString']];
    }

    public function sentenceCaseProvider(): array
    {
        return [
            ['test string', 'TestString'],
            ['Test String', 'TestString'],
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
