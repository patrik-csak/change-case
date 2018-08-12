<?php

use ChangeCase\CamelCase;

CamelCase::convert('string');                   // 'string'
CamelCase::convert('dot.case');                 // 'dotCase'
CamelCase::convert('PascalCase');               // 'pascalCase'
CamelCase::convert('version 1.2.10');           // 'version_1_2_10'
CamelCase::convert('STRING 1.2', 'tr');         // 'strıng_1_2'
CamelCase::convert('string 1 2 3', null, true); // 'string123'
