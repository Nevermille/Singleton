<?php namespace Lianhua\Singleton\Test;

use PHPUnit\Framework\TestCase;

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
 * @file SingletonTest.php
 * @author Camille Nevermind
 */

/**
 * @class SingletonTest
 * @brief The tests for Singleton
 * @package Lianhua\Singleton\Test
 */
class SingletonTest extends TestCase
{
    /**
     * @brief Sets up the test environement
     * @return void
     */
    public static function setUpBeforeClass(): void
    {
        require_once __DIR__ . DIRECTORY_SEPARATOR . "SimpleSingleton.php";
        require_once __DIR__ . DIRECTORY_SEPARATOR . "SecondSingleton.php";
    }

    /**
     * @brief All the tests for class implementation
     * @return void
     */
    public function testClass()
    {
        $s = SimpleSingleton::get();
        $t = SecondSingleton::get();

        $this->assertNotNull($s);
        $this->assertNotNull($t);
        $this->assertEquals(0, $s->getN());
        $this->assertEquals(1, $t->getN());

        $s->setN(3);
        $t->setN(5);

        $this->assertEquals(3, $s->getN());
        $this->assertEquals(5, $t->getN());

        $s2 = SimpleSingleton::get();
        $t2 = SecondSingleton::get();

        $this->assertEquals(3, $s2->getN());
        $this->assertEquals(5, $t2->getN());
    }
}
