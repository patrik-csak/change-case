<?php

declare(strict_types=1);

use ChangeCase\ParamCase;
use PHPUnit\Framework\TestCase;

final class ParamCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @dataProvider mixedCaseProvider
     * @dataProvider nonAlphanumericSeparatorsProvider
     * @dataProvider nonLatinProvider
     * @dataProvider sentenceCaseProvider
     * @dataProvider singleWordProvider
     */
    public function testConvert(string $before, string $after): void
    {
        $this->assertEquals($after, ParamCase::convert($before));
    }

    public function mixedCaseProvider(): array
    {
        return [
            ['TestString', 'test-string'],
            ['testString1_2_3', 'test-string1-2-3'],
            ['testString_1_2_3', 'test-string-1-2-3'],
        ];
    }

    public function nonAlphanumericSeparatorsProvider(): array
    {
        return [
            ['dot.case', 'dot-case'],
            ['path/case', 'path-case'],
        ];
    }

    public function nonLatinProvider(): array
    {
        return [['My Entrée', 'my-entrée']];
    }

    public function sentenceCaseProvider(): array
    {
        return [
            ['test string', 'test-string'],
            ['Test String', 'test-string'],
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
