<?php

use ChangeCase\ChangeCase;

ChangeCase::dot('string');          // 'string'
ChangeCase::dot('camelCase');       // 'camel.case'
ChangeCase::dot('sentence case');   // 'sentence case'
ChangeCase::dot('MY STRING', 'tr'); // 'my.strıng'
