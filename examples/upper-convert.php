<?php

use ChangeCase\UpperCase;

UpperCase::convert('string');       // 'STRING'
UpperCase::convert('string', 'tr'); // 'STRİNG'
UpperCase::convert(
    new class
    {
        public function __toString()
        {
            return 'test';
        }
    }
); // 'TEST'
