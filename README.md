# Singleton

[![Build Status](https://travis-ci.com/Nevermille/Singleton.svg?branch=master)](https://travis-ci.com/Nevermille/Singleton) [![BCH compliance](https://bettercodehub.com/edge/badge/Nevermille/Singleton?branch=master)](https://bettercodehub.com/)

## Overview

A simple PHP class for singleton

## Compatibility

This library has been tested for PHP 7.3 and higher

## Installation

Just use composer in your project:

```
composer require lianhua/singleton
```

## Usage

Create a class using \Lianhua\Singleton\Singleton trait, that's all.

```php
class MySingleton
{
    use \Lianhua\Singleton\Singleton;
    // Your methods and properties here
}
```

If you need a constructor, make sure it's a protected one

```php
class MySingleton
{
    use \Lianhua\Singleton\Singleton;

    private $n;

    protected function __construct()
    {
        $this->n = 0;
    }
}
```

## Upgrading
### From 1.0 to 2.0

Singleton became a trait instead of a class in order to create many singleton classes. Please edit your class like this:

**Then**
```php
class MySingleton extends \Lianhua\Singleton\Singleton
{
    private $n;

    protected function __construct()
    {
        $this->n = 0;
    }
}
```

**Now**
```php
class MySingleton
{
    use \Lianhua\Singleton\Singleton;

    private $n;

    protected function __construct()
    {
        $this->n = 0;
    }
}
```
