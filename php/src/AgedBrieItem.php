<?php

namespace GildedRose;

/**
 * Class AgedBrieItem
 * @package GildedRose
 */
final class AgedBrieItem extends UpdatableItem
{
    /**
     * updateQuality
     */
    public function updateQuality(): void
    {
        if ($this->quality->isLessThanHalf()) {
            $this->updateWithLessThanHalfQuality();
        }
    }

    /**
     * updateSellIn
     */
    public function updateSellIn(): void
    {
        $this->sellIn->subtractOne();
    }

    /**
     * updateWithLessThanHalfQuality
     */
    private function updateWithLessThanHalfQuality(): void
    {
        $this->quality->addOne();
        if ($this->sellIn->isNegative()) {
            $this->quality->addOne();
        }
    }
}