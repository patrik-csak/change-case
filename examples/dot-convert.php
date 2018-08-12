<?php

use ChangeCase\DotCase;

DotCase::convert('string');          // 'string'
DotCase::convert('camelCase');       // 'camel.case'
DotCase::convert('sentence case');   // 'sentence.case'
DotCase::convert('MY STRING', 'tr'); // 'my.strıng'
