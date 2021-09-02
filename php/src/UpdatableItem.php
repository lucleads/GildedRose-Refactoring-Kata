<?php

namespace GildedRose;

/**
 * Class UpdatableItem
 * @package GildedRose
 */
abstract class UpdatableItem extends Item
{
    public abstract function updateQuality(): void;

    public abstract function updateSellIn(): void;
}