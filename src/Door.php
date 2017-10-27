<?php

namespace AlexanderZabornyi\SimpleFactoryTest;

interface Door
{
    public function setWidth(string $width);
    public function setHeight(string $height);
    public function getWidth(): float;
    public function getHeight(): float;
}