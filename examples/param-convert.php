<?php

use ChangeCase\ParamCase;

ParamCase::convert('string');          // 'string'
ParamCase::convert('camelCase');       // 'camel-case'
ParamCase::convert('sentence case');   // 'sentence-case'
ParamCase::convert('MY STRING', 'tr'); // 'my-strıng'
