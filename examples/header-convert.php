<?php

use ChangeCase\HeaderCase;

HeaderCase::convert('string');          // 'String'
HeaderCase::convert('PascalCase');      // 'Pascal-Case'
HeaderCase::convert('MY_STRING', 'tr'); // 'My-Strıng'
