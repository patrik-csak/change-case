<?php

use ChangeCase\SentenceCase;

SentenceCase::convert('string');           // 'String'
SentenceCase::convert('dot.case');         // 'Dot case'
SentenceCase::convert('PascalCase');       // 'Pascal case'
SentenceCase::convert('version 1.2.10');   // 'Version 1 2 10'
SentenceCase::convert('STRING 1.2', 'tr'); // 'Strıng 1 2'
