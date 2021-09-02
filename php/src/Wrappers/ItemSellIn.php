<?php

namespace GildedRose\Wrappers;

/**
 * Class ItemSellIn
 * @package GildedRose\Wrappers
 */
class ItemSellIn
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
     * subtractOne
     */
    public function subtractOne(): void
    {
        $this->value--;
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
     * sellInIsNegative
     * @return bool
     */
    public function isNegative(): bool
    {
        return $this->value < 0;
    }
}