<?php

namespace ChangeCase;

final class HeaderCase
{
    public static function convert(string $string): string
    {
        return preg_replace_callback('/^.|-./u', function (array $matches) {
            return UpperCase::convert($matches[0]);
        }, NoCase::convert($string, '-'));
    }
}
