<?php

use ChangeCase\ChangeCase;

ChangeCase::sentence('string');           // 'String'
ChangeCase::sentence('dot.case');         // 'Dot case'
ChangeCase::sentence('PascalCase');       // 'Pascal case'
ChangeCase::sentence('version 1.2.10');   // 'Version 1 2 10'
ChangeCase::sentence('STRING 1.2', 'tr'); // 'Strıng 1 2'
