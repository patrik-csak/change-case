<?php

namespace ChangeCase;

final class SwapCase
{
    public static function convert(string $string): string
    {
        $result = '';
        $stringLength = \strlen($string);

        for ($i = 0; $i < $stringLength; $i++) {
            $char = mb_substr($string, $i, 1);
            $charUpper = mb_strtoupper($char);
            $result .= $charUpper === $char ? mb_strtolower($char) : $charUpper;
        }

        return $result;
    }
}
