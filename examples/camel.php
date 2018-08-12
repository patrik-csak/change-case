<?php

use ChangeCase\ChangeCase;

ChangeCase::camel('string');                        // 'string'
ChangeCase::lowerCamel('dot.case');                 // 'dotCase'
ChangeCase::camel('PascalCase');                    // 'pascalCase'
ChangeCase::lowerCamel('version 1.2.10');           // 'version_1_2_10'
ChangeCase::camel('STRING 1.2', 'tr');              // 'strıng_1_2'
ChangeCase::lowerCamel('string 1 2 3', null, true); // 'strıng123'
