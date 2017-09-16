String\CaseConv
========

## NAME

String\CaseConv - word case convertor

## SYNOPSIS

```php
use String\CaseConv;

require_once '/path/to/vendor/autoload.php';

$ret = CaseConv::toCamel('foo_bar'); # fooBar
$ret = CaseConv::toLowerCamel('foo_bar'); # fooBar
$ret = CaseConv::toUpperCamel('foo_bar'); # FooBar

```

## INSTALLATION

To install this package into your project via composer, add the following snippet to your `composer.json`. Then run `composer install`.

```
"require": {
    "bayashi/string-caseconv": "dev-master"
}
```

If you want to install from gihub, add the following:

```
"repositories": [
    {
        "type": "vcs",
        "url": "git@github.com:bayashi/php-String-CaseConv.git"
    }
]
```

## METHODS

### toCamel

fooBar

### toLowerCamel

fooBar

### toUpperCamel

FooBar

### toPascal

FooBar

### toSnake

foo_bar

### toLowerSnake

foo_bar

### toUpperSnake

Foo_bar

### toKebab

foo-bar

### toLowerKebab

foo-bar

### toChain

foo-bar

### toLisp

Foo-bar

### toTrain

Foo-Bar

### toConstant

FOO_BAR

### toHttpHeader

Foo-MD5

### toSpace

foo bar

### toScreaming

FOO BAR

## THANKS TO

The original Camel Snake Kebab Clojure library: [https://github.com/qerub/camel-snake-kebab](https://github.com/qerub/camel-snake-kebab)

And Perl implement: [https://github.com/kablamo/perl-string-camelsnakekebab](https://github.com/kablamo/perl-string-camelsnakekebab)

## AUTHOR

Dai Okabayashi &lt;bayashi@cpan.org&gt;

## LICENSE

This library is free software. You can redistribute it and/or modify it under the same terms as PHP itself.
