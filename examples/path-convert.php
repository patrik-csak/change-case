<?php

use ChangeCase\PathCase;

PathCase::convert('string');          // 'string'
PathCase::convert('camelCase');       // 'camel/case'
PathCase::convert('sentence case');   // 'sentence/case'
PathCase::convert('MY STRING', 'tr'); // 'my/strıng'
