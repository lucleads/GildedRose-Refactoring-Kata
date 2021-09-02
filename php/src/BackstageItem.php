<?php

namespace GildedRose;

/**
 * Class BackstageItem
 * @package GildedRose
 */
final class BackstageItem extends UpdatableItem
{
    /**
     * updateQuality
     */
    public function updateQuality(): void
    {
        if ($this->quality->isLessThanHalf()) {
            $this->updateLessThanHalfQuality();
        }

        if ($this->getSellIn()->isNegative()) {
            $this->setQuality(0);
        }

        $this->sellIn->subtractOne();
    }

    /**
     * updateSellIn
     */
    public function updateSellIn(): void
    {
        $this->sellIn->subtractOne();
    }

    /**
     * updateLessThanHalfQuality
     */
    private function updateLessThanHalfQuality(): void
    {
        $this->quality->addOne();
        if ($this->sellIn->getValue() < 11) {
            $this->updateLessThanElevenSellIn();
        }
    }

    /**
     * updateLessThanElevenSellIn
     */
    private function updateLessThanElevenSellIn(): void
    {
        $this->quality->addOne();
        if ($this->sellIn->getValue() < 6) {
            $this->quality->addOne();
        }
    }
}