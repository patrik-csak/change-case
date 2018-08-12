<?php

use ChangeCase\PascalCase;

PascalCase::convert('string');                   // 'String'
PascalCase::convert('camelCase');                // 'CamelCase'
PascalCase::convert('sentence case');            // 'SentenceCase'
PascalCase::convert('MY STRING', 'tr');          // 'MyStrıng'
PascalCase::convert('version 1.2.10');           // 'Version_1_2_10'
PascalCase::convert('string 1 2 3', null, true); // 'String123'
