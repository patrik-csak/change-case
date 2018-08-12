<?php

use ChangeCase\ChangeCase;

ChangeCase::no('string');                    // 'string'
ChangeCase::no('dot.case');                  // 'dot case'
ChangeCase::no('camelCase');                 // 'camel case'
ChangeCase::no('Beyoncé Knowles');           // 'beyoncé knowles'
ChangeCase::no('A STRING', 'tr');            // 'a strıng'
ChangeCase::no('HELLO WORLD!', null, '_');   // 'hello_world'
