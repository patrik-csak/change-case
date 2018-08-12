<?php

declare(strict_types=1);

use ChangeCase\NoCase;
use PHPUnit\Framework\TestCase;

final class NoCaseTest extends TestCase
{
    /**
     * @param string $before
     * @param string $after
     * @param string $locale
     * @param string $replacement
     *
     * @dataProvider camelCaseProvider
     * @dataProvider constantCaseProvider
     * @dataProvider customLocaleProvider
     * @dataProvider customReplacementCharacterProvider
     * @dataProvider dataWithNumbersProvider
     * @dataProvider nonAlphanumericSeparatorsProvider
     * @dataProvider nonAsciiProvider
     * @dataProvider numberStringProvider
     * @dataProvider oddInputProvider
     * @dataProvider punctuationProvider
     * @dataProvider randomCaseProvider
     * @dataProvider singleWordsProvider
     * @dataProvider spaceBetweenNumbersProvider
     * @dataProvider whitespaceProvider
     */
    public function testConvert(
        string $before,
        string $after,
        string $locale = null,
        string $replacement = ' '
    ) {
        $this->assertEquals(
            $after,
            NoCase::convert($before, $locale, $replacement)
        );
    }

    public function camelCaseProvider(): array
    {
        return [
            ['testString', 'test string'],
            ['testString123', 'test string123'],
            ['testString_1_2_3', 'test string 1 2 3'],
            ['x_256', 'x 256'],
            ['anHTMLTag', 'an html tag'],
            ['ID123String', 'id123 string'],
            ['Id123String', 'id123 string'],
            ['foo bar123', 'foo bar123'],
            ['a1bStar', 'a1b star'],
        ];
    }

    public function constantCaseProvider(): array
    {
        return [
            ['CONSTANT_CASE', 'constant case'],
            ['CONST123_FOO', 'const123 foo'],
        ];
    }

    public function customLocaleProvider(): array
    {
        return [['A STRING', 'a strıng', 'tr']];
    }

    public function customReplacementCharacterProvider(): array
    {
        return [
            ['HELLO WORLD!', 'hello_world', null, '_'],
            ['foo bar!', 'foobar', null, ''],
        ];
    }

    public function dataWithNumbersProvider(): array
    {
        return [
            ['amazon s3 data', 'amazon s3 data'],
            ['foo_13_bar', 'foo 13 bar'],
        ];
    }

    public function nonAlphanumericSeparatorsProvider(): array
    {
        return [
            ['dot.case', 'dot case'],
            ['path/case', 'path case'],
            ['snake_case', 'snake case'],
            ['snake_case123', 'snake case123'],
            ['snake_case_123', 'snake case 123'],
        ];
    }

    public function nonAsciiProvider(): array
    {
        return [
            ['español', 'español'],
            ['Beyoncé Knowles', 'beyoncé knowles'],
            ['Iñtërnâtiônàlizætiøn', 'iñtërnâtiônàlizætiøn'],
        ];
    }

    public function numberStringProvider(): array
    {
        return [['something_2014_other', 'something 2014 other']];
    }

    public function oddInputProvider(): array
    {
        return [
            [(string)null, ''],
            [(string)10, '10'],
            [
                (string)new class
                {
                    public function __toString()
                    {
                        return 'test';
                    }
                },
                'test',
            ],
        ];
    }

    public function punctuationProvider(): array
    {
        return [['"quotes"', 'quotes']];
    }

    public function randomCaseProvider(): array
    {
        return [['FOO_bar', 'foo bar']];
    }

    public function singleWordsProvider(): array
    {
        return [
            ['test', 'test'],
            ['TEST', 'test'],
        ];
    }

    public function spaceBetweenNumbersProvider(): array
    {
        return [
            ['version 0.45.0', 'version 0 45 0'],
            ['version 0..78..9', 'version 0 78 9'],
            ['version 4_99/4', 'version 4 99 4'],
        ];
    }

    public function whitespaceProvider(): array
    {
        return [['  test  ', 'test']];
    }
}
