<?php

use ChangeCase\SnakeCase;

SnakeCase::convert('string');          // 'string'
SnakeCase::convert('camelCase');       // 'camel_case'
SnakeCase::convert('sentence case');   // 'sentence_case'
SnakeCase::convert('MY STRING', 'tr'); // 'my_strıng'
