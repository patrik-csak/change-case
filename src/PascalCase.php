<?php

namespace ChangeCase;

final class PascalCase
{
    public static function convert(
        string $string,
        bool $mergeNumbers = false
    ): string {
        return UpperCaseFirst::convert(
            CamelCase::convert($string, $mergeNumbers)
        );
    }
}
