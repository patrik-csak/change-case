<?php

use ChangeCase\ChangeCase;

ChangeCase::pascal('string');              // 'String'
ChangeCase::upperCamel('string');          // 'CamelCase'
ChangeCase::pascal('sentence case');       // 'SentenceCase'
ChangeCase::upperCamel('MY STRING', 'tr'); // 'MyStrıng'
