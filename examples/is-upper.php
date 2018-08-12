<?php

use ChangeCase\ChangeCase;

ChangeCase::isUpper('STRING'); // true
ChangeCase::isUpper('String'); // false
ChangeCase::isUpper('string'); // false
