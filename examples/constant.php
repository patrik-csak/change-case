<?php

use ChangeCase\ChangeCase;

ChangeCase::constant('string');           // 'STRING'
ChangeCase::screamingSnake('PascalCase'); // 'PASCAL_CASE'
ChangeCase::constant('string');           // 'STRING'
ChangeCase::screamingSnake('PascalCase'); // 'PASCAL_CASE'
ChangeCase::constant('myString', 'tr');   // 'MY_STRİNG'
