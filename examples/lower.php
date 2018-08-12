<?php

use ChangeCase\ChangeCase;

ChangeCase::lower('STRING');       // 'string'
ChangeCase::lower('STRING', 'tr'); // 'strıng'
ChangeCase::lower(
    new class
    {
        public function __toString()
        {
            return 'TEST';
        }
    }
); // 'test'
