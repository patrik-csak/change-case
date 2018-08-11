<?php

declare(strict_types=1);

use ChangeCase\SentenceCase;
use PHPUnit\Framework\TestCase;

final class SentenceCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @param string $locale
     *
     * @dataProvider nonAlphanumericSeparatorsProvider
     * @dataProvider sentenceCaseProvider
     * @dataProvider singleWordProvider
     */
    public function testConvert(
        string $before,
        string $after,
        string $locale = null
    ): void {
        $this->assertEquals($after, SentenceCase::convert($before, $locale));
    }

    public function localeProvider(): array
    {
        return [['MY_STRİNG', 'My string', 'tr']];
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
