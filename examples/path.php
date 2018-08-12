<?php

use ChangeCase\ChangeCase;

ChangeCase::path('string');          // 'string'
ChangeCase::path('camelCase');       // 'camel/case'
ChangeCase::path('sentence case');   // 'sentence/case'
ChangeCase::path('MY STRING', 'tr'); // 'my/strıng'
