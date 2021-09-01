<?php

declare(strict_types=1);

namespace GildedRose;

final class GildedRose
{
    private const AGED_BRIE = 'Aged Brie';
    private const BACKSTAGE = 'Backstage passes to a TAFKAL80ETC concert';
    private const SULFURAS = 'Sulfuras, Hand of Ragnaros';

    /**
     * @var Item[]
     */
    private $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function updateQuality(): void
    {
        foreach ($this->items as $item) {
            if ($item->getName() != self::AGED_BRIE && $item->getName() != self::BACKSTAGE) {
                if ($item->getQuality() > 0 && $item->getName() != self::SULFURAS) {
                    $item->setQuality($item->getQuality() - 1);
                }
            } else {
                if ($item->getQuality() < 50) {
                    $item->setQuality($item->getQuality() + 1);
                    if ($item->getName() == self::BACKSTAGE) {
                        if ($item->getSellIn() < 11 && $item->getQuality() < 50) {
                            $item->setQuality($item->getQuality() + 1);
                        }
                        if ($item->getSellIn() < 6 && $item->getQuality() < 50) {
                            $item->setQuality($item->getQuality() + 1);
                        }
                    }
                }
            }

            if ($item->getName() != self::SULFURAS) {
                $item->setSellIn($item->getSellIn() - 1);
            }

            if ($item->getSellIn() < 0) {
                if ($item->getName() != self::AGED_BRIE) {
                    if ($item->getName() != self::BACKSTAGE) {
                        if ($item->getQuality() > 0 && $item->getName() != self::SULFURAS) {
                            $item->setQuality($item->getQuality() - 1);
                        }
                    } else {
                        $item->setQuality(0);
                    }
                } else {
                    if ($item->getQuality() < 50) {
                        $item->setQuality($item->getQuality() + 1);
                    }
                }
            }
        }
    }
}
