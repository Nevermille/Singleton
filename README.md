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

Create a class extending \Lianhua\Singleton\Singleton, that's all.

```php
class MySingleton extends \Lianhua\Singleton\Singleton
{
    // Your methods and properties here
}
```

If you need a constructor, make sure it's a protected one

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
