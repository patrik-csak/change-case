<?php

use ChangeCase\ChangeCase;

ChangeCase::snake('string');            // 'string'
ChangeCase::pothole('cameCase');        // 'camel_case'
ChangeCase::snake('sentence case');     // 'sentence_case'
ChangeCase::pothole('MY STRING', 'tr'); // 'my_strıng'
