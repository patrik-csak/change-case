<?php

namespace ChangeCase;

class ChangeCase
{
    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param bool $mergeNumbers
     *
     * @return string
     */
    public static function camel(
        string $string,
        string $locale = null,
        bool $mergeNumbers = false
    ): string {
        return CamelCase::convert($string, $locale, $mergeNumbers);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param bool $mergeNumbers
     *
     * @return string
     */
    public static function camelCase(
        string $string,
        string $locale = null,
        bool $mergeNumbers = false
    ): string {
        return CamelCase::convert($string, $locale, $mergeNumbers);
    }

    public static function constant(string $string): string
    {
        return self::constantCase($string);
    }

    public static function constantCase(string $string): string
    {
        return ConstantCase::convert($string);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function dot(string $string, string $locale = null): string
    {
        return DotCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function dotCase(
        string $string,
        string $locale = null
    ): string {
        return DotCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function header(string $string, string $locale = null): string
    {
        return HeaderCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function headerCase(
        string $string,
        string $locale = null
    ): string {
        return HeaderCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function lower(string $string, string $locale = null): string
    {
        return LowerCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function lowerCase(
        string $string,
        string $locale = null
    ): string {
        return LowerCase::convert($string, $locale);
    }

    public static function lcFirst(string $string): string
    {
        return self::lowerCaseFirst($string);
    }

    public static function lowerCaseFirst(string $string): string
    {
        return LowerCaseFirst::convert($string);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param string $replacement
     *
     * @return string
     */
    public static function no(
        string $string,
        string $locale = null,
        string $replacement = ' '
    ): string {
        return NoCase::convert($string, $locale, $replacement);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     * @param string $replacement
     *
     * @return string
     */
    public static function noCase(
        string $string,
        string $locale = null,
        string $replacement = ' '
    ): string {
        return NoCase::convert($string, $locale, $replacement);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function param(string $string, string $locale = null): string
    {
        return ParamCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function paramCase(
        string $string,
        string $locale = null
    ): string {
        return ParamCase::convert($string, $locale);
    }

    public static function pascal(string $string, bool $mergeNumbers = false)
    {
        return self::pascalCase($string, $mergeNumbers);
    }

    public static function pascalCase(
        string $string,
        bool $mergeNumbers = false
    ): string {
        return PascalCase::convert($string, $mergeNumbers);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function path(string $string, string $locale = null): string
    {
        return PathCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function pathCase(
        string $string,
        string $locale = null
    ): string {
        return PathCase::convert($string, $locale);
    }

    public static function sentence(string $string): string
    {
        return self::sentenceCase($string);
    }

    public static function sentenceCase(string $string): string
    {
        return SentenceCase::convert($string);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function snake(string $string, string $locale = null): string
    {
        return SnakeCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function snakeCase(
        string $string,
        string $locale = null
    ): string {
        return SnakeCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function swap(string $string, string $locale = null): string
    {
        return SwapCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function swapCase(
        string $string,
        string $locale = null
    ): string {
        return SwapCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function title(string $string, string $locale = null): string
    {
        return TitleCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function titleCase(
        string $string,
        string $locale = null
    ): string {
        return TitleCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function upper(string $string, string $locale = null): string
    {
        return UpperCase::convert($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return string
     */
    public static function upperCase(
        string $string,
        string $locale = null
    ): string {
        return UpperCase::convert($string, $locale);
    }

    public static function ucFirst(string $string): string
    {
        return self::upperCaseFirst($string);
    }

    public static function upperCaseFirst(string $string): string
    {
        return UpperCaseFirst::convert($string);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return bool
     */
    public static function isLower(string $string, string $locale = null): bool
    {
        return IsCase::lowerCase($string, $locale);
    }

    /**
     * @param string $string
     * @param string $locale Supports the following locales: `'az'`, `'lt'`,
     *                       `'tr'`
     *
     * @return bool
     */
    public static function isLowerCase(
        string $string,
        string $locale = null
    ): bool {
        return IsCase::lowerCase($string, $locale);
    }

    public static function isUpper(string $string): bool
    {
        return self::isUpperCase($string);
    }

    public static function isUpperCase(string $string): bool
    {
        return IsCase::upperCase($string);
    }
}
