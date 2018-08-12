<?php

use ChangeCase\ChangeCase;

ChangeCase::param('string');          // 'string'
ChangeCase::kebab('camelCase');       // 'camel-case'
ChangeCase::param('sentence case');   // 'camel-case'
ChangeCase::kebab('MY STRING', 'tr'); // 'my-strıng'
