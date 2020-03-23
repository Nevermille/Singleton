<?php namespace Lianhua\Singleton;

/*
Singleton Library
Copyright (C) 2020  Lianhua Studio

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * @file Singleton.php
 * @author Camille Nevermind
 */

/**
 * @class Singleton
 * @brief The singleton class
 * @package Lianhua\Singleton
 */
abstract class Singleton
{
    /**
     * @brief The only instance of this class
     * @var Singleton $instance
     */
    protected static $instance = null;

    /**
     * @brief The constructor
     * @return void
     */
    protected function __construct()
    {
        // Constructor body
    }

    /**
     * @brief Creates the instance if it doesn't exists and returns it
     * @return Singleton The instance
     */
    public static function get(): Singleton
    {
        if (self::$instance === null) {
            self::$instance = new static();
        }

        return self::$instance;
    }
}
