<?php

use ChangeCase\SwapCase;

SwapCase::convert(null);                   // ''
SwapCase::convert('string');               // 'STRING'
SwapCase::convert('PascalCase');           // 'pASCALcASE'
SwapCase::convert('Iñtërnâtiônàlizætiøn'); // 'iÑTËRNÂTIÔNÀLIZÆTIØN'
SwapCase::convert('My String', 'tr');      // 'mY sTRİNG'
