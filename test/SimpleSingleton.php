<?php namespace Lianhua\Singleton\Test;

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
 * @file SimpleSingleton.php
 * @author Camille Nevermind
 */

/**
 * @class SimpleSingleton
 * @brief The singleton implementation for tests
 * @package Lianhua\Singleton\Test
 */
class SimpleSingleton
{
    use \Lianhua\Singleton\Singleton;

    /**
     * @brief Just an int
     * @var int $n
     */
    private $n;

    /**
     * @brief The constructor
     * @return void
     */
    protected function __construct()
    {
        $this->n = 0;
    }

    /**
     * @brief Sets the int value
     * @param int $n The value
     * @return void
     */
    public function setN(int $n): void
    {
        $this->n = $n;
    }

    /**
     * @brief Returns the int value
     * @return int The int value
     */
    public function getN(): int
    {
        return $this->n;
    }
}
