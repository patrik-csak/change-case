<?php

use ChangeCase\ConstantCase;

ConstantCase::convert('string'); // 'STRING'
ConstantCase::convert('PascalCase'); // 'PASCAL_CASE'
ConstantCase::convert('myString', 'tr'); // 'MY_STRİNG'
