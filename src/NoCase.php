<?php

namespace ChangeCase;

final class NoCase
{
    public static function convert(
        string $string,
        string $replacement = ' '
    ): string {
        $string = preg_replace(
            Constants::CAMEL_CASE_REGEX,
            '${1} ${2}',
            $string
        ) ?: $string;
        $string = preg_replace(
            Constants::CAMEL_CASE_UPPER_REGEX,
            '${1} ${2}',
            $string
        ) ?: $string;

        preg_match_all(
            Constants::NON_WORD_REGEX,
            $string,
            $matches,
            PREG_OFFSET_CAPTURE
        );
        $matches = $matches[0];
        array_walk(
            $matches,
            function ($match, $index) use (&$string, &$matches, $replacement) {
                [$substring, $offset] = $match;

                if ($offset === 0) {
                    // It's at the beginning `$string`

                    // Trim off the beginning
                    $string = substr($string, \strlen($substring));
                    $offsetAdjust = -\strlen($substring);
                } else {
                    if ($offset === (\strlen($string) - \strlen($substring))) {
                        // It's at the end of `$string`

                        // Trim off the end
                        $string = substr(
                            $string,
                            0,
                            \strlen($string) - \strlen($substring)
                        );
                        $offsetAdjust = -\strlen($substring);
                    } else {
                        $string = substr_replace(
                            $string,
                            $replacement,
                            $offset,
                            -\strlen($string) + $offset + \strlen($substring)
                        );
                        $offsetAdjust = \strlen($replacement) - \strlen($substring);
                    }
                }
                /*
                 * Update the offset of the remaining matches because we may
                 * have just changed the length of `$string`
                 */
                for ($i = $index + 1; $i < count($matches); $i++) {
                    $matches[$i][1] += $offsetAdjust;
                }
            }
        );

        return mb_strtolower($string);
    }
}
