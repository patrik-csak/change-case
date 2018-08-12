<?php

declare(strict_types=1);

use ChangeCase\ChangeCase;
use PHPUnit\Framework\TestCase;

final class ChangeCaseTest extends TestCase
{
    public function testCamel()
    {
        $this->assertEquals('test', ChangeCase::camel('test'));
        $this->assertEquals('test', ChangeCase::lowerCamel('TEST'));
    }

    public function testConstant()
    {
        $this->assertEquals('TEST_STRING', ChangeCase::constant('testString'));
        $this->assertEquals(
            'TEST_STRING',
            ChangeCase::screamingSnake('Test String')
        );
        $this->assertEquals('TEST_STRING', ChangeCase::constant('Test_String'));
        $this->assertEquals(
            'TEST_STRING',
            ChangeCase::screamingSnake('Test-String')
        );
        $this->assertEquals(
            'A_BETTER_TEST',
            ChangeCase::constant('a---better__test')
        );
    }

    public function testDot()
    {
        $this->assertEquals('test.string', ChangeCase::dot('test.string'));
        $this->assertEquals('test.string', ChangeCase::dot('Test String'));
        $this->assertEquals('test.string', ChangeCase::dot('Test_String'));
        $this->assertEquals('test.string', ChangeCase::dot('Test-String'));
        $this->assertEquals(
            'a.better.test',
            ChangeCase::dot('a---better__test')
        );
    }

    public function testHeader()
    {
        $this->assertEquals('A-Simple-Test',
            ChangeCase::header('a-simple-test')
        );
        $this->assertEquals(
            'This-Is-A-Test',
            ChangeCase::header('this is a test')
        );
        $this->assertEquals(
            'This-Is-A-Test',
            ChangeCase::header('this_is_a_test')
        );
        $this->assertEquals(
            'This-Is-A-Test',
            ChangeCase::header('this-is-a-test')
        );
    }

    public function testLower()
    {
        $this->assertEquals('test', ChangeCase::lower('test'));
        $this->assertEquals('test', ChangeCase::lower('TEST'));
    }

    public function testLowerFirst()
    {
        $this->assertEquals('tEST', ChangeCase::lowerFirst('TEST'));
        $this->assertEquals('test', ChangeCase::lowerFirst('Test'));
    }

    public function testNo()
    {
        $this->assertEquals('a simple test', ChangeCase::no('a-simple-test'));
        $this->assertEquals('this is a test', ChangeCase::no('this is a test'));
        $this->assertEquals('this is a test', ChangeCase::no('this_is_a_test'));
        $this->assertEquals('this is a test', ChangeCase::no('this-is-a-test'));
    }

    public function testParam()
    {
        $this->assertEquals('test-string', ChangeCase::param('testString'));
        $this->assertEquals('test-string', ChangeCase::kebab('Test String'));
        $this->assertEquals('test-string', ChangeCase::param('Test_String'));
        $this->assertEquals('test-string', ChangeCase::kebab('Test-String'));
        $this->assertEquals(
            'a-better-test',
            ChangeCase::param('a---better__test')
        );
    }

    public function testPascal()
    {
        $this->assertEquals('TestString', ChangeCase::pascal('testString'));
        $this->assertEquals(
            'TestString',
            ChangeCase::upperCamel('Test String')
        );
        $this->assertEquals('TestString', ChangeCase::pascal('Test_String'));
        $this->assertEquals(
            'TestString',
            ChangeCase::upperCamel('Test-String')
        );
        $this->assertEquals('FacebookApi', ChangeCase::pascal('Facebook API'));
        $this->assertEquals(
            'ATestAgain',
            ChangeCase::upperCamel('a-test-again')
        );
        $this->assertEquals(
            'ABetterTest',
            ChangeCase::pascal('a---better__test')
        );
    }

    public function testPath()
    {
        $this->assertEquals('test/string', ChangeCase::path('testString'));
        $this->assertEquals('test/string', ChangeCase::path('Test String'));
        $this->assertEquals('test/string', ChangeCase::path('Test_String'));
        $this->assertEquals('test/string', ChangeCase::path('Test-String'));
        $this->assertEquals(
            'a/better/test',
            ChangeCase::path('a---better__test')
        );
    }

    public function testSentence()
    {
        $this->assertEquals(
            'A simple test',
            ChangeCase::sentence('a-simple-test')
        );
        $this->assertEquals(
            'This is a test',
            ChangeCase::sentence('this is a test')
        );
        $this->assertEquals(
            'This is a test',
            ChangeCase::sentence('this_is_a_test')
        );
        $this->assertEquals(
            'This is a test',
            ChangeCase::sentence('this-is-a-test')
        );
    }

    public function testSnake()
    {
        $this->assertEquals('test_string', ChangeCase::snake('testString'));
        $this->assertEquals('test_string', ChangeCase::pothole('Test String'));
        $this->assertEquals('test_string', ChangeCase::snake('Test_String'));
        $this->assertEquals('test_string', ChangeCase::pothole('Test-String'));
        $this->assertEquals(
            'a_better_test',
            ChangeCase::snake('a---better__test')
        );
    }

    public function testSwap()
    {
        $this->assertEquals('rAnDomCASe', ChangeCase::swap('RaNdOMcasE'));
        $this->assertEquals('Mix iT.dOWN?', ChangeCase::swap('mIX It.Down?'));
    }

    public function testTitle()
    {
        $this->assertEquals(
            'A Test Sentence',
            ChangeCase::title('a test sentence')
        );
        $this->assertEquals(
            'I Found A Bug',
            ChangeCase::start('i found a bug')
        );
        $this->assertEquals(
            'Some Things',
            ChangeCase::title("some things'")
        );
        $this->assertEquals(
            'Quotes',
            ChangeCase::start('"quotes"')
        );
        $this->assertEquals(
            'Hyphen Ness',
            ChangeCase::title('hyphen-ness')
        );
    }

    public function testUpper()
    {
        $this->assertEquals('TEST', ChangeCase::upper('TEST'));
        $this->assertEquals('TEST', ChangeCase::allCaps('test'));
    }

    public function testUpperFirst()
    {
        $this->assertEquals('TEST', ChangeCase::upperFirst('TEST'));
        $this->assertEquals('Test', ChangeCase::upperFirst('test'));
    }

    public function testIsUpper()
    {
        $this->assertTrue(ChangeCase::isUpper('ALLUPPERCASE'));
        $this->assertFalse(ChangeCase::isUpper('NotAllUpperCase'));
        $this->assertFalse(ChangeCase::isUpper('alllowercase'));
    }

    public function testIsLower()
    {
        $this->assertFalse(ChangeCase::isLower('ALLUPPERCASE'));
        $this->assertFalse(ChangeCase::isLower('NotAllUpperCase'));
        $this->assertTrue(ChangeCase::isLower('alllowercase'));
    }
}
