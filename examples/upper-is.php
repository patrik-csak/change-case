<?php

use ChangeCase\UpperCase;

UpperCase::is('STRING'); // true
UpperCase::is('String'); // false
UpperCase::is('string'); // false
