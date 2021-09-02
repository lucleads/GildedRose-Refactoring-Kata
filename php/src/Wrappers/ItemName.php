<?php

namespace GildedRose\Wrappers;

/**
 * Class ItemName
 * @package GildedRose\Wrappers
 */
class ItemName
{
    /**
     * @var string
     */
    private $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}