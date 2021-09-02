<?php

declare(strict_types=1);

namespace GildedRose;

/**
 * Class GildedRose
 * @package GildedRose
 */
final class GildedRose
{
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
            if ($item instanceof UpdatableItem) {
                $this->updateItem($item);
            }
        }
    }

    /**
     * updateItem
     * @param UpdatableItem $item
     */
    private function updateItem(UpdatableItem $item): void
    {
        $item->updateQuality();
        $item->updateSellIn();
    }
}
