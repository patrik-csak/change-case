<?php

use ChangeCase\LowerCase;

LowerCase::convert('STRING');       // 'string'
LowerCase::convert('STRING', 'tr'); // 'strıng'
LowerCase::convert(
    new class
    {
        public function __toString()
        {
            return 'TEST';
        }
    }
); // 'test'
