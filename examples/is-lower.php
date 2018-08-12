<?php

use ChangeCase\ChangeCase;

ChangeCase::isLower('string'); // true
ChangeCase::isLower('String'); // false
ChangeCase::isLower('STRING'); // false
