<?php

namespace App;

class GildedRose
{
    public $name;

    public $quality;

    public $sellIn;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public static function of($name, $quality, $sellIn) {
        return new static($name, $quality, $sellIn);
    }

    public function tick()
    {
        if ($this->name == 'Aged Brie'){

            if ($this->quality < 50)
                $this->quality = $this->quality + 1;

            $this->sellIn = $this->sellIn - 1;

            if ($this->sellIn < 0) {
                if ($this->quality < 50)
                    $this->quality = $this->quality + 1;
            }
        } elseif ($this->name == 'Backstage passes to a TAFKAL80ETC concert'){

            if ($this->quality < 50)
                $this->quality = $this->quality + 1;
            if ($this->sellIn < 11)
                if ($this->quality < 50)
                    $this->quality = $this->quality + 1;

            if ($this->sellIn < 6)
                if ($this->quality < 50)
                    $this->quality = $this->quality + 1;

            $this->sellIn = $this->sellIn - 1;

            if ($this->sellIn < 0) {
                $this->quality = $this->quality - $this->quality;
            }
        } elseif ($this->name == 'Sulfuras, Hand of Ragnaros'){

        }
        else {
            if ($this->quality > 0)
                $this->quality = $this->quality - 1;

            $this->sellIn = $this->sellIn - 1;

            if ($this->sellIn < 0) {
                if ($this->quality > 0)
                    $this->quality = $this->quality - 1;
            }
        }

    }
}
