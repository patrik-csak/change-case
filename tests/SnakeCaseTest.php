<?php

declare(strict_types=1);

use ChangeCase\SnakeCase;
use PHPUnit\Framework\TestCase;

final class SnakeCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @param string $locale
     *
     * @dataProvider pascalCaseProvider
     * @dataProvider nonAlphanumericProvider
     * @dataProvider nonLatinProvider
     * @dataProvider sentenceCaseProvider
     * @dataProvider singleWordProvider
     */
    public function testConvert(
        string $before,
        string $after,
        string $locale = null
    ): void {
        $this->assertEquals($after, SnakeCase::convert($before, $locale));
    }

    public function localeProvider(): array
    {
        return [['MY STRING', 'my_strıng', 'tr']];
    }

    public function nonLatinProvider(): array
    {
        return [['My Entrée', 'my_entrée']];
    }

    public function pascalCaseProvider(): array
    {
        return [
            ['TestString', 'test_string'],
            ['TestString1_2_3', 'test_string1_2_3'],
        ];
    }

    public function nonAlphanumericProvider(): array
    {
        return [
            ['dot.case', 'dot_case'],
            ['path/case', 'path_case'],
        ];
    }

    public function sentenceCaseProvider(): array
    {
        return [
            ['test string', 'test_string'],
            ['Test String', 'test_string'],
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
