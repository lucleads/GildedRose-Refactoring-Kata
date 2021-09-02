<?php

namespace GildedRose;

use GildedRose\Wrappers\ItemName;
use GildedRose\Wrappers\ItemQuality;
use GildedRose\Wrappers\ItemSellIn;

/**
 * Class ItemSelector
 * @package GildedRose
 */
class ItemSelector
{
    private const AGED_BRIE = 'Aged Brie';
    private const BACKSTAGE = 'Backstage passes to a TAFKAL80ETC concert';
    private const SULFURAS = 'Sulfuras, Hand of Ragnaros';

    /**
     * clasifyItem
     * @param string $name
     * @param int $sellIn
     * @param int $quality
     * @return Item
     */
    static function clasifyItem(string $name, int $sellIn, int $quality): Item
    {
        $name = new ItemName($name);
        $sellIn = new ItemSellIn($sellIn);
        $quality = new ItemQuality($quality);

        switch ($name) {
            case self::AGED_BRIE:
                $item = new AgedBrieItem($name, $sellIn, $quality);
                break;
            case self::BACKSTAGE:
                $item = new BackstageItem($name, $sellIn, $quality);
                break;
            case self::SULFURAS:
                $item = new SulfurasItem($name, $sellIn, $quality);
                break;
            default:
                $item = new UnknownItem($name, $sellIn, $quality);
        }

        return $item;
    }
}