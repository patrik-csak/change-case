<?php

declare(strict_types=1);

use ChangeCase\CamelCase;
use PHPUnit\Framework\TestCase;

final class CamelCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @param bool $mergeNumbers
     * @dataProvider nonAlphanumericSeparatorsProvider
     * @dataProvider nonLatinProvider
     * @dataProvider numberGroupingProvider
     * @dataProvider pascalCasedStringsProvider
     * @dataProvider periodsInsideNumbersProvider
     * @dataProvider sentenceCaseProvider
     * @dataProvider singleWordProvider
     */
    public function testConvert(
        string $before,
        string $after,
        bool $mergeNumbers = false
    ): void {
        $this->assertEquals($after, CamelCase::convert($before, $mergeNumbers));
    }

    public function nonAlphanumericSeparatorsProvider(): array
    {
        return [
            ['dot.case', 'dotCase'],
            ['path/case', 'pathCase'],
        ];
    }

    public function nonLatinProvider(): array
    {
        return [['simple éxample', 'simpleÉxample']];
    }

    public function numberGroupingProvider(): array
    {
        return [['test 1 2 3', 'test123', true]];
    }

    public function pascalCasedStringsProvider(): array
    {
        return [['TestString', 'testString']];
    }

    public function periodsInsideNumbersProvider(): array
    {
        return [
            ['version 1.2.10', 'version_1_2_10'],
            ['version 1.21.0', 'version_1_21_0'],
        ];
    }

    public function sentenceCaseProvider(): array
    {
        return [
            ['test string', 'testString'],
            ['Test String', 'testString'],
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
