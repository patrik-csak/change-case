<?php

namespace ChangeCase;

final class CamelCase
{
    public static function convert(
        string $string,
        bool $mergeNumbers = false
    ): string {
        $result = NoCase::convert($string);

        if (!$mergeNumbers) {
            $result = preg_replace('/ (?=\d)/', '_', $result);
        }

        return preg_replace_callback('/ (.)/u', function (array $matches) {
            return UpperCase::convert($matches[1]);
        }, $result);
    }
}
