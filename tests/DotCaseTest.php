<?php

declare(strict_types=1);

use ChangeCase\DotCase;
use PHPUnit\Framework\TestCase;

final class DotCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @dataProvider mixedCaseProvider
     * @dataProvider nonAlphanumericProvider
     * @dataProvider nonLatinProvider
     * @dataProvider sentenceCaseProvider
     * @dataProvider singleWorldProvider
     */
    public function testConvert(
        string $before,
        string $after
    ): void {
        $this->assertEquals($after, DotCase::convert($before));
    }

    public function mixedCaseProvider(): array
    {
        return [
            ['TestString', 'test.string'],
            ['TestString1_2_3', 'test.string1.2.3'],
            ['TestString_1_2_3', 'test.string.1.2.3'],
        ];
    }

    public function nonAlphanumericProvider(): array
    {
        return [
            ['dot.case', 'dot.case'],
            ['path/case', 'path.case'],
        ];
    }

    public function nonLatinProvider(): array
    {
        return [['My Entrée', 'my.entrée']];
    }

    public function sentenceCaseProvider(): array
    {
        return [
            ['test string', 'test.string'],
            ['Test String', 'test.string'],
        ];
    }

    public function singleWorldProvider(): array
    {
        return [
            ['test', 'test'],
            ['TEST', 'test'],
        ];
    }
}
