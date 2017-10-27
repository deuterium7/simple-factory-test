<?php

namespace AlexanderZabornyi\SimpleFactoryTest;

class SimpleFactory
{
    /**
     * Вернуть экземпляр
     *
     * @return Door
     */
    public function createWoodenDoor(): Door
    {
        return new WoodenDoor();
    }
}