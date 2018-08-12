<?php

/**
 * ChangeCase
 */

namespace ChangeCase;

/**
 * ChangeCase
 *
 * @api
 */
class ChangeCase
{
    /**
     * Convert `$string` to all caps (AKA 'upper case')
     *
     * @example upper.php
     * @see ChangeCase::upper()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function allCaps(
        string $string,
        string $locale = null
    ): string {
        return UpperCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to camel case (AKA 'lower camel case')
     *
     * @example camel.php
     * @see ChangeCase::lowerCamel()
     * @see ChangeCase::upperCamel()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param bool $mergeNumbers If `true`, there will be no character between
     *                           numbers. If `false`, there will be a `_`
     *                           between numbers.
     *
     * @return string The converted string
     */
    public static function camel(
        string $string,
        string $locale = null,
        bool $mergeNumbers = false
    ): string {
        return CamelCase::convert($string, $locale, $mergeNumbers);
    }

    /**
     * Convert `$string` to constant case (AKA 'screaming snake case')
     *
     * @example constant.php
     * @see ChangeCase::screamingSnake()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function constant(
        string $string,
        string $locale = null
    ): string {
        return ConstantCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to dot case
     *
     * @example dot.php
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function dot(string $string, string $locale = null): string
    {
        return DotCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to header case
     *
     * @example header.php
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function header(
        string $string,
        string $locale = null
    ): string {
        return HeaderCase::convert($string, $locale);
    }

    /**
     * Check if `$string` is lower case
     *
     * @example is-lower.php
     * @see ChangeCase::isUpper()
     * @see ChangeCase::lower()
     *
     * @param string $string The string to check
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return bool
     */
    public static function isLower(string $string, string $locale = null): bool
    {
        return LowerCase::is($string, $locale);
    }

    /**
     * Check if `$string` is upper case
     *
     * @example is-upper.php
     * @see ChangeCase::isLower()
     * @see ChangeCase::lower()
     *
     * @param string $string The string to check
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return bool
     */
    public static function isUpper(string $string, string $locale = null): bool
    {
        return UpperCase::is($string, $locale);
    }

    /**
     * Convert `$string` to kebab case (AKA 'param case')
     *
     * @example param.php
     * @see ChangeCase::lisp()
     * @see ChangeCase::param()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function kebab(string $string, string $locale = null): string
    {
        return ParamCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to lisp case (AKA 'kebab case', 'param case')
     *
     * @example param.php
     * @see ChangeCase::kebab()
     * @see ChangeCase::param()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function lisp(string $string, string $locale = null): string
    {
        return ParamCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to lower case
     *
     * @example lower.php
     * @see ChangeCase::lowerCase()
     * @see ChangeCase::isLower()
     * @see ChangeCase::no()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function lower(string $string, string $locale = null): string
    {
        return LowerCase::convert($string, $locale);
    }

    /**
     * Convert a `$string` to lower camel case
     *
     * @example camel.php
     * @see ChangeCase::camel()
     * @see ChangeCase::upperCamel()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param bool $mergeNumbers If `true`, there will be no character between
     *                           numbers. If `false`, there will be a `_`
     *                           between numbers.
     *
     * @return string The converted string
     */
    public static function lowerCamel(
        string $string,
        string $locale = null,
        bool $mergeNumbers = false
    ): string {
        return CamelCase::convert($string, $locale, $mergeNumbers);
    }

    /**
     * Lower case the first character of `$string`
     *
     * @example lower-first.php
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function lowerFirst(
        string $string,
        string $locale = null
    ): string {
        return LowerCaseFirst::convert($string, $locale);
    }

    /**
     * Transform a string to lower space cased
     *
     * @example no.php
     * @see ChangeCase::lower()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param string $replacement Replacement character
     *
     * @return string The converted string
     */
    public static function no(
        string $string,
        string $locale = null,
        string $replacement = ' '
    ): string {
        return NoCase::convert($string, $locale, $replacement);
    }

    /**
     * Convert `$string` to param case (AKA 'kebab case', 'lisp case')
     *
     * @example param.php
     * @see ChangeCase::kebab()
     * @see ChangeCase::lisp()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function param(string $string, string $locale = null): string
    {
        return ParamCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to Pascal case (AKA 'upper camel case')
     *
     * @example pascal.php
     * @see ChangeCase::upperCamel()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param bool $mergeNumbers
     *
     * @return string The converted string
     */
    public static function pascal(
        string $string,
        string $locale = null,
        bool $mergeNumbers = false
    ): string {
        return PascalCase::convert($string, $locale, $mergeNumbers);
    }

    /**
     * Convert `$string` to path case
     *
     * @example path.php
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function path(string $string, string $locale = null): string
    {
        return PathCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to pothole case (AKA 'snake case')
     *
     * @example snake.php
     * @see ChangeCase::snake()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function pothole(
        string $string,
        string $locale = null
    ): string {
        return SnakeCase::convert($string, $locale);
    }


    /**
     * Convert `$string` to screaming snake (constant) case
     *
     * @example constant.php
     * @see ChangeCase::constant()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function screamingSnake(
        string $string,
        string $locale = null
    ): string {
        return ConstantCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to sentence case
     *
     * Explicitly adds a space between groups of numbers to maintain readability
     * and reversibility (e.g. `1.20.5` becomes `1 20 5`, not `1205`).
     *
     * @example sentence.php
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function sentence(
        string $string,
        string $locale = null
    ): string {
        return SentenceCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to snake case (AKA 'pothole case')
     *
     * @example snake.php
     * @see ChangeCase::pothole()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function snake(string $string, string $locale = null): string
    {
        return SnakeCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to start case (AKA 'title case')
     *
     * @example title.php
     * @see ChangeCase::title()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function start(string $string, string $locale = null): string
    {
        return TitleCase::convert($string, $locale);
    }


    /**
     * Swap the case of `$string`
     *
     * @example swap.php
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function swap(string $string, string $locale = null): string
    {
        return SwapCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to title case (AKA 'start case')
     *
     * @example title.php
     * @see ChangeCase::start()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function title(string $string, string $locale = null): string
    {
        return TitleCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to upper case (AKA 'all caps')
     *
     * @example upper.php
     * @see ChangeCase::allCaps()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function upper(string $string, string $locale = null): string
    {
        return UpperCase::convert($string, $locale);
    }

    /**
     * Convert `$string` to upper camel case (AKA 'Pascal case')
     *
     * @example pascal.php
     * @see ChangeCase::pascal()
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param bool $mergeNumbers
     *
     * @return string The converted string
     */
    public static function upperCamel(
        string $string,
        string $locale = null,
        bool $mergeNumbers = false
    ): string {
        return PascalCase::convert($string, $locale, $mergeNumbers);
    }

    /**
     * Upper case the first character of `$string`
     *
     * @example upper-first.php
     *
     * @param string $string The string to convert
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string The converted string
     */
    public static function upperFirst(
        string $string,
        string $locale = null
    ): string {
        return UpperCaseFirst::convert($string, $locale);
    }

}
