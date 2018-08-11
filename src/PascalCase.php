<?php

namespace ChangeCase;

class PascalCase
{
    public static function convert(
        string $string,
        string $locale = null,
        bool $mergeNumbers = false
    ): string {
        return UpperCaseFirst::convert(
            CamelCase::convert($string, $locale, $mergeNumbers),
            $locale
        );
    }
}
