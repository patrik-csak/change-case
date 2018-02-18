<?php

declare(strict_types=1);

use ChangeCase\SentenceCase;
use PHPUnit\Framework\TestCase;

final class SentenceCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @dataProvider nonAlphanumericSeparatorsProvider
     * @dataProvider sentenceCaseProvider
     * @dataProvider singleWordProvider
     */
    public function testConvert(string $before, string $after): void
    {
        $this->assertEquals($after, SentenceCase::convert($before));
    }

    public function nonAlphanumericSeparatorsProvider(): array
    {
        return [
            ['dot.case', 'Dot case'],
            ['path/case', 'Path case'],
        ];
    }

    public function sentenceCaseProvider(): array
    {
        return [
            ['test string', 'Test string'],
            ['Test String', 'Test string'],
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
