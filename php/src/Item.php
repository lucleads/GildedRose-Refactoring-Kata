<?php

declare(strict_types=1);

namespace GildedRose;

final class Item
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $sell_in;

    /**
     * @var int
     */
    private $quality;

    /**
     * @param int $sell_in
     */
    public function setSellIn(int $sell_in): void
    {
        $this->sell_in = $sell_in;
    }

    /**
     * @param int $quality
     */
    public function setQuality(int $quality): void
    {
        $this->quality = $quality;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getSellIn(): int
    {
        return $this->sell_in;
    }

    /**
     * @return int
     */
    public function getQuality(): int
    {
        return $this->quality;
    }

    public function __construct(string $name, int $sell_in, int $quality)
    {
        $this->name = $name;
        $this->sell_in = $sell_in;
        $this->quality = $quality;
    }

    public function __toString(): string
    {
        return "{$this->name}, {$this->sell_in}, {$this->quality}";
    }

    /**
     * substractOneQuality
     */
    public function substractOneQuality(): void
    {
        $this->quality--;
    }

    /**
     * addOneQuality
     */
    public function addOneQuality(): void
    {
        $this->quality++;
    }

    /**
     * substractOneSellIn
     */
    public function substractOneSellIn(): void
    {
        $this->sell_in--;
    }

    /**
     * qualityHalfSuperior
     * @return bool
     */
    public function lessThanHalfQuality(): bool
    {
        return $this->quality < 50;
    }
}
