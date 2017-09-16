<?php

namespace String;

class CaseConv
{
    const VERSION = '0.1.0';

    const WORD_SEPARATOR_PATTERN = '/(?:\s+|_|-|(?<=[A-Z])(?=[A-Z][a-z])|(?<=[^A-Z_-])(?=[A-Z])|(?<=[A-Za-z0-9])(?=[^A-Za-z0-9]))/';

    const UPPER_CASE_HTTP_HEADERS = [
        'CSP', 'ATT', 'WAP', 'IP', 'HTTP', 'CPU', 'DNT', 'SSL', 'UA', 'TE', 'WWW', 'XSS', 'MD5',
    ];

    static public function httpHeaderCaps($string)
    {
        if (in_array(strtoupper($string), self::UPPER_CASE_HTTP_HEADERS)) {
            return strtoupper($string);
        } else {
            return ucfirst($string);
        }
    }

    static public function convertCase($string, $first_func, $rest_func, $separator)
    {
        if ($string === null || $string === '') {
            return '';
        }

        $splited_strings = preg_split(self::WORD_SEPARATOR_PATTERN, $string);

        $first      = array_slice($splited_strings, 0, 1);
        $rest_words = array_slice($splited_strings, 1);

        $converted_word[] = call_user_func($first_func, $first[0]);

        foreach ($rest_words as $word) {
            $converted_word[] = call_user_func($rest_func, $word);
        }

        return implode($separator, $converted_word);
    }

    static public function toCamel($string)
    {
        return self::toLowerCamel($string);
    }

    static public function toLowerCamel($string)
    {
        return self::convertCase($string, 'strtolower', 'ucfirst', '');
    }

    static public function toUpperCamel($string)
    {
        return self::convertCase($string, 'ucfirst', 'ucfirst', '');
    }

    static public function toPascal($string)
    {
        return self::toUpperCamel($string);
    }

    static public function toSnake($string)
    {
        return self::toLowerSnake($string);
    }

    static public function toLowerSnake($string)
    {
        return self::convertCase($string, 'strtolower', 'strtolower', '_');
    }

    static public function toUpperSnake($string)
    {
        return self::convertCase($string, 'ucfirst', 'strtolower', '_');
    }

    static public function toKebab($string)
    {
        return self::toLowerKebab($string);
    }

    static public function toChain($string)
    {
        return self::toLowerKebab($string);
    }

    static public function toLowerKebab($string)
    {
        return self::convertCase($string, 'strtolower', 'strtolower', '-');
    }

    static public function toLisp($string)
    {
        return self::convertCase($string, 'ucfirst', 'strtolower', '-');
    }

    static public function toTrain($string)
    {
        return self::convertCase($string, 'ucfirst', 'ucfirst', '-');
    }

    static public function toConstant($string)
    {
        return self::convertCase($string, 'strtoupper', 'strtoupper', '_');
    }

    static public function toHttpHeader($string)
    {
        return self::convertCase($string, 'self::httpHeaderCaps', 'self::httpHeaderCaps', '-');
    }

    static public function toSpace($string)
    {
        return self::convertCase($string, 'strtolower', 'strtolower', ' ');
    }

    static public function toScreaming($string)
    {
        return self::convertCase($string, 'strtoupper', 'strtoupper', ' ');
    }
}