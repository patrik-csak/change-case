# Change Case

Convert strings to `camelCase`, `CONSTANT_CASE`, `dot.case`, `Header-Case`,
`lower case`, `param-case`, `PascalCase`, `path/case`, `Sentence case`,
`snake_case`, `Title Case`, `UPPER CASE`, and more!

Change Case is a port to PHP from JavaScript of [Blake Embrey’s project of the
same name](https://github.com/blakeembrey/change-case).

## Installation

```
$ composer require ptrkcsk/change-case
```

## Case styles

| Style (& aliases) | Example |
|---|---|
| [Camel, lower camel](#camel) | `test string` → `testString` |
| [Constant, screaming snake](#constant) | `test string` → `TEST_STRING` |
| [Dot](#dot) | `test string` → `test.string`|
| [Header](#header) | `test string` → `Test-String` |
| [Lower](#lower) | `test string` → `test string` |
| [Lower first](#lower-first) | `TEST STRING` → `tEST STRING` |
| [No](#no) | `test string` → `test string` |
| [Param, kebab, lisp](#param) | `test string` → `test-string` |
| [Pascal, upper camel](#pascal) | `test string` → `TestString` |
| [Path](#path) | `test string` → `test/string` |
| [Sentence](#sentence) | `test string` → `Test string` |
| [Snake, pothole](#snake) | `test string` → `test_string` |
| [Title, start](#title) | `test string` → `Test String` |
| [Upper, all caps](#upper) | `test string` → `TEST STRING` |
| [Upper first](#upper-first) | `test string` → `Test string` |

## API Methods

### <a name='camel'></a>Camel case, lower camel case: `test string` → `testString`

```php
use ChangeCase\ChangeCase;

ChangeCase::camel('test string');      // 'testString'
ChangeCase::lowerCamel('test string'); // 'testString'
```

<!-- TODO: Add link to API docs -->

### <a name='constant'></a>Constant case, screaming snake case: `test string` → `TEST_STRING`

```php
use ChangeCase\ChangeCase;

ChangeCase::constant('test string');       // 'TEST_STRING'
ChangeCase::screamingSnake('test string'); // 'TEST_STRING'
```

<!-- TODO: Add link to API docs -->

### <a name='dot'></a>Dot case: `test string` → `test.string`

```php
use ChangeCase\ChangeCase;

ChangeCase::dot('test string'); // 'test.case'
```

<!-- TODO: Add link to API docs -->

### <a name='header'></a>Header case: `test string` → `Test-String`

```php
use ChangeCase\ChangeCase;

ChangeCase::header('test string'); // 'Test-String'
```

<!-- TODO: Add link to API docs -->

### <a name='lower'></a>Lower case: `test string` → `test string`

```php
use ChangeCase\ChangeCase;

ChangeCase::lower('test string'); // 'test string'
```

<!-- TODO: Add link to API docs -->

### <a name='lower-first'></a>Lower case first: `TEST STRING` → `tEST STRING`

```php
use ChangeCase\ChangeCase;

ChangeCase::lowerFirst('TEST STRING'); // 'tEST STRING'
```

<!-- TODO: Add link to API docs -->

### <a name='no'></a>No case: `test string` → `test string`

```php
use ChangeCase\ChangeCase;

ChangeCase::no('test string'); // 'test string'
```

<!-- TODO: Add link to API docs -->

### <a name='param'></a>Param case, kebab case, lisp case: `test string` → `test-string`

```php
use ChangeCase\ChangeCase;

ChangeCase::param('test string'); // 'test-string'
ChangeCase::kebab('test string'); // 'test-string'
ChangeCase::lisp('test string');  // 'test-string'
```

<!-- TODO: Add link to API docs -->

### <a name='pascal'></a>Pascal case, upper camel case: `test string` → `TestString`

```php
use ChangeCase\ChangeCase;

ChangeCase::pascal('test string');     // 'TestString'
ChangeCase::upperCamel('test string'); // 'TestString'
```

<!-- TODO: Add link to API docs -->

### <a name='path'></a>Path case: `test string` → `test/string`

```php
use ChangeCase\ChangeCase;

ChangeCase::path('test string'); // 'test/string'
```

<!-- TODO: Add link to API docs -->

### <a name='sentence'></a>Sentence case: `test string` → `Test string`

```php
use ChangeCase\ChangeCase;

ChangeCase::sentence('test string'); // 'Test string'
```

<!-- TODO: Add link to API docs -->

### <a name='snake'></a>Snake case, pothole case: `test string` → `test_string`

```php
use ChangeCase\ChangeCase;

ChangeCase::snake('test string');   // 'test_string'
ChangeCase::pothole('test string'); // 'test_string'
```

<!-- TODO: Add link to API docs -->

### <a name='title'></a>Title case, start case: `test string` → `Test String`

```php
use ChangeCase\ChangeCase;

ChangeCase::title('test string'); // 'Test String'
ChangeCase::start('test string'); // 'Test String'
```

<!-- TODO: Add link to API docs -->

### <a name='upper'></a>Upper case, all caps: `test string` → `TEST STRING`

```php
use ChangeCase\ChangeCase;

ChangeCase::upper('test string');   // 'TEST STRING'
ChangeCase::allCaps('test string'); // 'TEST STRING'
```

<!-- TODO: Add link to API docs -->

### <a name='upper-first'></a>Upper case first: `test string` → `Test string`

```php
use ChangeCase\ChangeCase;

ChangeCase::upperFirst('test string');  // 'Test string'
```

<!-- TODO: Add link to API docs -->

<!-- TODO: Add URL -->

## [Detailed API documentation](#)

