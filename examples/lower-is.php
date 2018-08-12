<?php

use ChangeCase\LowerCase;

LowerCase::is('string'); // true
LowerCase::is('String'); // false
LowerCase::is('STRING'); // false
