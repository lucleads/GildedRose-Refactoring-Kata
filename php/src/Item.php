<?php

declare(strict_types=1);

namespace GildedRose;

use GildedRose\Wrappers\ItemName;
use GildedRose\Wrappers\ItemQuality;
use GildedRose\Wrappers\ItemSellIn;

/**
 * Class Item
 * @package GildedRose
 */
abstract class Item
{
    /**
     * @var ItemName
     */
    protected $name;

    /**
     * @var ItemSellIn
     */
    protected $sellIn;

    /**
     * @var ItemQuality
     */
    protected $quality;

    /**
     * @param int $quality
     */
    protected function setQuality(int $quality): void
    {
        $this->quality = new ItemQuality($quality);
    }

    /**
     * getName
     * @return ItemName
     */
    public function getName(): ItemName
    {
        return $this->name;
    }

    /**
     * @return ItemSellIn
     */
    protected function getSellIn(): ItemSellIn
    {
        return $this->sellIn;
    }

    /**
     * @param ItemName $name
     * @param ItemSellIn $sell_in
     * @param ItemQuality $quality
     */
    public function __construct(ItemName $name, ItemSellIn $sell_in, ItemQuality $quality)
    {
        $this->name = $name;
        $this->sellIn = $sell_in;
        $this->quality = $quality;
    }

    /**
     * __toString
     * @return string
     */
    public function __toString(): string
    {
        return "{$this->name->getValue()}, {$this->sellIn->getValue()}, {$this->quality->getValue()}";
    }
}
