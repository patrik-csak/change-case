<?php

declare(strict_types=1);

use ChangeCase\ConstantCase;
use PHPUnit\Framework\TestCase;

final class ConstantCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @param string $locale
     *
     * @dataProvider localeProvider
     * @dataProvider nonAlphanumericSeparatorsProvider
     * @dataProvider pascalCaseProvider
     * @dataProvider sentenceCaseProvider
     * @dataProvider singleWordProvider
     */
    public function testConvert(
        string $before,
        string $after,
        string $locale = null
    ) {
        $this->assertEquals($after, ConstantCase::convert($before, $locale));
    }

    public function localeProvider(): array
    {
        return [['myString', 'MY_STRİNG', 'tr']];
    }

    public function nonAlphanumericSeparatorsProvider(): array
    {
        return [
            ['dot.case', 'DOT_CASE'],
            ['path/case', 'PATH_CASE'],
        ];
    }

    public function pascalCaseProvider(): array
    {
        return [['TestString', 'TEST_STRING']];
    }

    public function sentenceCaseProvider(): array
    {
        return [
            ['test string', 'TEST_STRING'],
            ['Test String', 'TEST_STRING'],
        ];
    }

    public function singleWordProvider(): array
    {
        return [
            ['test', 'TEST'],
            ['TEST', 'TEST'],
        ];
    }
}
