<?php

declare(strict_types=1);

use ChangeCase\ChangeCase;
use PHPUnit\Framework\TestCase;

final class ChangeCaseTest extends TestCase
{
    public function testCamelCase(): void
    {
        $this->assertEquals('test', ChangeCase::camel('test'));
        $this->assertEquals('test', ChangeCase::camelCase('TEST'));
    }

    public function testConstantCase(): void
    {
        $this->assertEquals('TEST_STRING', ChangeCase::constant('testString'));
        $this->assertEquals(
            'TEST_STRING',
            ChangeCase::constantCase('Test String')
        );
        $this->assertEquals(
            'TEST_STRING',
            ChangeCase::constantCase('Test_String')
        );
        $this->assertEquals(
            'TEST_STRING',
            ChangeCase::constantCase('Test-String')
        );
        $this->assertEquals(
            'A_BETTER_TEST',
            ChangeCase::constantCase('a---better__test')
        );
    }

    public function testDotCase(): void
    {
        $this->assertEquals('test.string', ChangeCase::dot('test.string'));
        $this->assertEquals('test.string', ChangeCase::dotCase('Test String'));
        $this->assertEquals('test.string', ChangeCase::dotCase('Test_String'));
        $this->assertEquals('test.string', ChangeCase::dotCase('Test-String'));
        $this->assertEquals(
            'a.better.test',
            ChangeCase::dotCase('a---better__test')
        );
    }

    public function testHeaderCase(): void
    {
        $this->assertEquals(
            'A-Simple-Test',
            ChangeCase::header('a-simple-test')
        );
        $this->assertEquals(
            'This-Is-A-Test',
            ChangeCase::headerCase('this is a test')
        );
        $this->assertEquals(
            'This-Is-A-Test',
            ChangeCase::headerCase('this_is_a_test')
        );
        $this->assertEquals(
            'This-Is-A-Test',
            ChangeCase::headerCase('this-is-a-test')
        );
    }

    public function testLowerCase(): void
    {
        $this->assertEquals('test', ChangeCase::lower('test'));
        $this->assertEquals('test', ChangeCase::lowerCase('TEST'));
    }

    public function testLowerCaseFirst(): void
    {
        $this->assertEquals('tEST', ChangeCase::lcFirst('TEST'));
        $this->assertEquals('test', ChangeCase::lowerCaseFirst('Test'));
    }

    public function testNoCase(): void
    {
        $this->assertEquals(
            'a simple test',
            ChangeCase::no('a-simple-test')
        );
        $this->assertEquals(
            'this is a test',
            ChangeCase::noCase('this is a test')
        );
        $this->assertEquals(
            'this is a test',
            ChangeCase::noCase('this_is_a_test')
        );
        $this->assertEquals(
            'this is a test',
            ChangeCase::noCase('this-is-a-test')
        );
    }

    public function testParamCase(): void
    {
        $this->assertEquals(
            'test-string',
            ChangeCase::param('testString')
        );
        $this->assertEquals(
            'test-string',
            ChangeCase::paramCase('Test String')
        );
        $this->assertEquals(
            'test-string',
            ChangeCase::paramCase('Test_String')
        );
        $this->assertEquals(
            'test-string',
            ChangeCase::paramCase('Test-String')
        );
        $this->assertEquals(
            'a-better-test',
            ChangeCase::paramCase('a---better__test')
        );
    }

    public function testPascalCase(): void
    {
        $this->assertEquals('TestString', ChangeCase::pascal('testString'));
        $this->assertEquals(
            'TestString',
            ChangeCase::pascalCase('Test String')
        );
        $this->assertEquals(
            'TestString',
            ChangeCase::pascalCase('Test_String')
        );
        $this->assertEquals(
            'TestString',
            ChangeCase::pascalCase('Test-String')
        );
        $this->assertEquals(
            'FacebookApi',
            ChangeCase::pascalCase('Facebook API')
        );
        $this->assertEquals(
            'ATestAgain',
            ChangeCase::pascalCase('a-test-again')
        );
        $this->assertEquals(
            'ABetterTest',
            ChangeCase::pascalCase('a---better__test')
        );
    }

    public function testPathCase(): void
    {
        $this->assertEquals('test/string', ChangeCase::path('testString'));
        $this->assertEquals('test/string', ChangeCase::pathCase('Test String'));
        $this->assertEquals('test/string', ChangeCase::pathCase('Test_String'));
        $this->assertEquals('test/string', ChangeCase::pathCase('Test-String'));
        $this->assertEquals(
            'a/better/test',
            ChangeCase::pathCase('a---better__test')
        );
    }

    public function testSentenceCase(): void
    {
        $this->assertEquals(
            'A simple test',
            ChangeCase::sentence('a-simple-test')
        );
        $this->assertEquals(
            'This is a test',
            ChangeCase::sentenceCase('this is a test')
        );
        $this->assertEquals(
            'This is a test',
            ChangeCase::sentenceCase('this_is_a_test')
        );
        $this->assertEquals(
            'This is a test',
            ChangeCase::sentenceCase('this-is-a-test')
        );
    }

    public function testSnakeCase(): void
    {
        $this->assertEquals('test_string', ChangeCase::snake('testString'));
        $this->assertEquals(
            'test_string',
            ChangeCase::snakeCase('Test String')
        );
        $this->assertEquals(
            'test_string',
            ChangeCase::snakeCase('Test_String')
        );
        $this->assertEquals(
            'test_string',
            ChangeCase::snakeCase('Test-String')
        );
        $this->assertEquals(
            'a_better_test',
            ChangeCase::snakeCase('a---better__test')
        );
    }

    public function testSwapCase(): void
    {
        $this->assertEquals('rAnDomCASe', ChangeCase::swap('RaNdOMcasE'));
        $this->assertEquals(
            'Mix iT.dOWN?',
            ChangeCase::swapCase('mIX It.Down?')
        );
    }

    public function testTitleCase(): void
    {
        $this->assertEquals(
            'A Test Sentence',
            ChangeCase::title('a test sentence')
        );
        $this->assertEquals(
            'I Found A Bug',
            ChangeCase::titleCase('i found a bug')
        );
        $this->assertEquals(
            'Some Things',
            ChangeCase::titleCase("some things'")
        );
        $this->assertEquals(
            'Quotes',
            ChangeCase::titleCase('"quotes"')
        );
        $this->assertEquals(
            'Hyphen Ness',
            ChangeCase::titleCase('hyphen-ness')
        );
    }

    public function testUpperCase(): void
    {
        $this->assertEquals('TEST', ChangeCase::upper('TEST'));
        $this->assertEquals('TEST', ChangeCase::upperCase('test'));
    }

    public function testUpperCaseFirst(): void
    {
        $this->assertEquals('TEST', ChangeCase::ucFirst('TEST'));
        $this->assertEquals('Test', ChangeCase::upperCaseFirst('test'));
    }

    public function testIsUpperCase(): void
    {
        $this->assertTrue(ChangeCase::isUpper('ALLUPPERCASE'));
        $this->assertFalse(ChangeCase::isUpperCase('NotAllUpperCase'));
        $this->assertFalse(ChangeCase::isUpperCase('alllowercase'));
    }

    public function testIsLowerCase(): void
    {
        $this->assertFalse(ChangeCase::isLower('ALLUPPERCASE'));
        $this->assertFalse(ChangeCase::isLowerCase('NotAllUpperCase'));
        $this->assertTrue(ChangeCase::isLowerCase('alllowercase'));
    }
}
