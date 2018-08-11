# Change Case

Convert strings to `camelCase`, `CONSTANT_CASE`, `dot.case`, `Header-Case`, `lower case`, `param case`, `PascalCase`, `path/case`, `Sentence case`, `snake_case`, `Title Case`, `UPPER CASE`, and more!

Change Case is a port to PHP from JavaScript of [Blake Embrey’s project of the same name](https://github.com/blakeembrey/change-case).

## Installation

```
$ composer require ptrkcsk/change-case
```

## Usage

There are three ways to convert a string to your desired case style:

- Longhand method: `ChangeCase\ChangeCase::[style]Case()`
- Shorthand method: `ChangeCase\ChangeCase::[style]()`
- Case class `convert` method: `ChangeCase\[Style]Case::convert()`

### Examples

#### Longhand method

```php
use ChangeCase\ChangeCase;

ChangeCase::camelCase('test string'); // 'testString'
```

#### Shorthand method

```php
use ChangeCase\ChangeCase;

ChangeCase::camel('test string'); // 'testString'
```

#### Case class `convert` method

```php
use ChangeCase\CamelCase;

CamelCase::convert('test string'); // 'testString'
```

## Case styles

| Style | Example |
|---|---|
| Camel | `test string` → `testString` |
| Constant | `test string` → `TEST_STRING` |
| Dot | `test string` → `test.string`|
| Header | `test string` → `Test-String` |
| Lower | `test string` → `test string` |
| Lower first | `TEST STRING` → `tEST STRING`
| No | `test string` → `test string` |
| Param | `test string` → `test-string` |
| Pascal | `test string` → `TestString` |
| Path | `test string` → `test/string` |
| Sentence | `test string` → `Test string` |
| Snake | `test string` → `test_string` |
| Title | `test string` → `Test String` |
| Upper | `test string` → `TEST STRING` |
| Upper first | `test string` → `Test string` |
