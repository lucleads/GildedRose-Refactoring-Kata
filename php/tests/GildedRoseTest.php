<?php

declare(strict_types=1);

namespace Tests;

use GildedRose\GildedRose;
use GildedRose\ItemSelector;
use PHPUnit\Framework\TestCase;

/**
 * Class GildedRoseTest
 * @package Tests
 */
class GildedRoseTest extends TestCase
{
    public function testFoo(): void
    {
        $items = [(new ItemSelector)::clasifyItem('foo', 0, 0)];
        $gildedRose = new GildedRose($items);
        $gildedRose->updateQuality();
        //TODO - make sense to this assert
        static::assertSame('foo', $items[0]->getName()->getValue());
    }
}
