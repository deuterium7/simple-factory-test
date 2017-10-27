<?php

namespace AlexanderZabornyi\SimpleFactoryTest\Tests;

use AlexanderZabornyi\SimpleFactoryTest\SimpleFactory;
use AlexanderZabornyi\SimpleFactoryTest\WoodenDoor;
use PHPUnit\Framework\TestCase;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateWoodenDoor()
    {
        $door = (new SimpleFactory())->createWoodenDoor();
        $this->assertInstanceOf(WoodenDoor::class, $door);
    }
}