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

| Style (& Aliases) | Example |
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

```
ChangeCase\ChangeCase::camel(string $string [, string $locale [, bool $mergeNumbers]]) : string

ChangeCase\ChangeCase::lowerCamel(string $string [, string $locale [, bool $mergeNumbers]]) : string
```

### <a name='constant'></a>Constant case, screaming snake case: `test string` → `TEST_STRING`

```
ChangeCase\ChangeCase::constant(string $string [, string $locale]) : string

ChangeCase\ChangeCase::screamingSnake(string $string [, string $locale]) : string
```

### <a name='dot'></a>Dot case: `test string` → `test.string`

```
ChangeCase\ChangeCase::dot(string $string [, string $locale]) : string
```

### <a name='header'></a>Header case: `test string` → `Test-String`

```
ChangeCase\ChangeCase::header(string $string [, string $locale]) : string
```

### <a name='lower'></a>Lower case: `test string` → `test string`

```
ChangeCase\ChangeCase::lower(string $string [, string $locale]) : string
```

### <a name='lower-first'></a>Lower case first: `TEST STRING` → `tEST STRING`

```
ChangeCase\ChangeCase::lowerFirst(string $string [, string $locale]) : string
```

### <a name='no'></a>No case: `test string` → `test string`

```
ChangeCase\ChangeCase::no(string $string [, string $locale [, string $replacement = ' ']]) : string
```

### <a name='param'></a>Param case, kebab case, lisp case: `test string` → `test-string`

```
ChangeCase\ChangeCase::param(string $string [, string $locale]) : string

ChangeCase\ChangeCase::kebab(string $string [, string $locale]) : string

ChangeCase\ChangeCase::lisp(string $string [, string $locale]) : string
```

### <a name='pascal'></a>Pascal case, upper camel case: `test string` → `TestString`

```
ChangeCase\ChangeCase::lisp(string $string [, string $locale [, bool $mergeNumbers]]) : string

ChangeCase\ChangeCase::upperCamel(string $string [, string $locale [, bool $mergeNumbers]]) : string
```

### <a name='path'></a>Path case: `test string` → `test/string`

```
ChangeCase\ChangeCase::path(string $string [, string $locale]) : string
```

### <a name='sentence'></a>Sentence case: `test string` → `Test string`

```
ChangeCase\ChangeCase::sentence(string $string [, string $locale]) : string
```

### <a name='snake'></a>Snake case, pothole case: `test string` → `test_string`

```
ChangeCase\ChangeCase::snake(string $string [, string $locale]) : string

ChangeCase\ChangeCase::pothole(string $string [, string $locale]) : string
```

### <a name='title'></a>Title case, start case: `test string` → `Test String`

```
ChangeCase\ChangeCase::title(string $string [, string $locale]) : string

ChangeCase\ChangeCase::start(string $string [, string $locale]) : string
```

### <a name='upper'></a>Upper case, all caps: `test string` → `TEST STRING`

```
ChangeCase\ChangeCase::upper(string $string [, string $locale]) : string

ChangeCase\ChangeCase::allCaps(string $string [, string $locale]) : string
```

### <a name='upper-first'></a>Upper case first: `test string` → `Test string`

```
ChangeCase\ChangeCase::upperFirst(string $string [, string $locale]) : string
```

<!-- TODO: Add URL -->

## [Detailed API documentation](#)

