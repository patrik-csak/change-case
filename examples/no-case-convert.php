<?php

use ChangeCase\NoCase;

NoCase::convert('string');                 // 'string'
NoCase::convert('dot.case');               // 'dot case'
NoCase::convert('camelCase');              // 'camel case'
NoCase::convert('Beyoncé Knowles');        // 'beyoncé knowles'
NoCase::convert('A STRING', 'tr');          // 'a strıng'
NoCase::convert('HELLO WORLD!', null, '_'); // 'hello_world'
