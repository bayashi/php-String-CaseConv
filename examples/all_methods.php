<?php

use \String\CaseConv;

require_once __DIR__ . '/../vendor/autoload.php';

main();
exit;

function conv($string, $case)
{
    echo "src: $string\n";
    echo "$case: ";
    echo call_user_func('string\CaseConv::' . $case, $string);
    echo "\n\n";
}

function main()
{
    conv('foo_bar', 'toCamel');

    conv('foo_bar', 'toLowerCamel');

    conv('foo_bar', 'toUpperCamel');

    conv('foo_bar', 'toPascal');

    conv('FooBar', 'toSnake');

    conv('FooBar', 'toLowerSnake');

    conv('FooBar', 'toUpperSnake');

    conv('FooBar', 'toKebab');

    conv('FooBar', 'toLowerKebab');

    conv('FooBar', 'toChain');

    conv('FooBar', 'toLisp');

    conv('FooBar', 'toTrain');

    conv('foo-bar', 'toConstant');

    conv('foo_md5', 'toHttpHeader');

    conv('foo_bar', 'toSpace');

    conv('foo_bar', 'toScreaming');
}