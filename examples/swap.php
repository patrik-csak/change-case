<?php

use ChangeCase\ChangeCase;

ChangeCase::swap('string');               // 'STRING'
ChangeCase::swap('PascalCase');           // 'pASCALcASE'
ChangeCase::swap('Iñtërnâtiônàlizætiøn'); // 'iÑTËRNÂTIÔNÀLIZÆTIØN'
ChangeCase::swap('My String', 'tr');      // 'mY sTRİNG'
