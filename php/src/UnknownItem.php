<?php

namespace GildedRose;

/**
 * Class UnknownItem
 * @package GildedRose
 */
final class UnknownItem extends UpdatableItem
{
    /**
     * updateQuality
     */
    public function updateQuality(): void
    {
        if ($this->quality->isPositive()) {
            $this->updateWithPositiveQuality();
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
     * updateWithPositiveQuality
     */
    private function updateWithPositiveQuality(): void
    {
        $this->quality->subtractOne();
        if ($this->getSellIn()->isNegative()) {
            $this->quality->subtractOne();
        }
    }
}