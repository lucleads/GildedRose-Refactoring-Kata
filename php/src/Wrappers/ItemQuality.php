<?php

namespace GildedRose\Wrappers;

/**
 * Class ItemQuality
 * @package GildedRose\Wrappers
 */
class ItemQuality
{
    /**
     * @var int
     */
    private $value;

    /**
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    /**
     * getValue
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * subtractOne
     */
    public function subtractOne(): void
    {
        $this->value--;
    }

    /**
     * addOne
     */
    public function addOne(): void
    {
        $this->value++;
    }

    /**
     * isPositive
     * @return bool
     */
    public function isPositive(): bool
    {
        return $this->value > 0;
    }

    /**
     * isLessThanHalf
     * @return bool
     */
    public function isLessThanHalf(): bool
    {
        return $this->value < 50;
    }
}