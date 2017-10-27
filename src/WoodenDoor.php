<?php

namespace AlexanderZabornyi\SimpleFactoryTest;

class WoodenDoor implements Door
{
    protected $width;
    protected $height;

    /**
     * Установить ширину
     *
     * @param string $width
     */
    public function setWidth(string $width)
    {
        $this->width = $width;
    }

    /**
     * Установить высоту
     *
     * @param string $height
     */
    public function setHeight(string $height)
    {
        $this->height = $height;
    }

    /**
     * Вернуть ширину
     *
     * @return float
     */
    public function getWidth(): float
    {
        return $this->width;
    }

    /**
     * Вернуть высоту
     *
     * @return float
     */
    public function getHeight(): float
    {
        return $this->height;
    }
}