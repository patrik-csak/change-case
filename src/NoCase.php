<?php

/**
 * NoCase
 */

namespace ChangeCase;

use function count;

/**
 * NoCase
 */
class NoCase
{
    /**
     * Transform a string to lower space cased.
     *
     * Optional locale and replacement character supported.
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param string $replacement Replacement character
     *
     * @return string
     */
    public static function convert(
        string $string,
        string $locale = null,
        string $replacement = ' '
    ): string {
        $string = preg_replace(
            [
                Regex::CAMEL_CASE,
                Regex::CAMEL_CASE_UPPER,
            ],
            '${1} ${2}',
            $string
        );

        preg_match_all(
            Regex::NON_WORD,
            $string,
            $matches,
            PREG_OFFSET_CAPTURE
        );

        [$matches] = $matches;
        $matchesLength = count($matches);

        // Fix incorrect offsets due to multibyte characters
        foreach ($matches as $i => &$m) {
            $m[1] = mb_strlen(substr($string, 0, $m[1]));
        }

        unset($m);

        foreach ($matches as $i => &$m) {
            [$match, $offset] = $m;
            $matchLength = mb_strlen($match);
            $stringLength = mb_strlen($string);

            // If $offset is at the start/end of $string, replace with ''
            // Else, replace with $replacement
            if ($offset === 0) {
                $offsetAdjust = -$matchLength;
                $string = mb_substr($string, $matchLength);
            } elseif ($offset === $stringLength - $matchLength) {
                $offsetAdjust = -$matchLength;
                $string = mb_substr($string, 0, $stringLength - $matchLength);
            } else {
                $replacementLength = mb_strlen($replacement);
                $offsetAdjust = -($matchLength - $replacementLength);
                $left = mb_substr($string, 0, $offset);
                $right = mb_substr($string, $offset + $matchLength);
                $string = $left . $replacement . $right;
            }

            // Adjust offsets of the remaining matches, in case we changed the
            // length of $string
            for ($j = $i + 1; $j < $matchesLength; $j++) {
                $matches[$j][1] += $offsetAdjust;
            }
        }

        unset($m);

        return LowerCase::convert($string, $locale);
    }
}
