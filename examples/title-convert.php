<?php

use ChangeCase\TitleCase;

TitleCase::convert('string');       // 'String"
TitleCase::convert('PascalCase');   // 'Pascal Case"
TitleCase::convert('STRING', 'tr'); // 'Strıng"
