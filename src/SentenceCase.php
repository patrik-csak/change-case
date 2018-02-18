<?php

namespace ChangeCase;

final class SentenceCase
{
    public static function convert(string $string): string
    {
        return UpperCaseFirst::convert(NoCase::convert($string));
    }
}
