<?php

namespace App;


/**
 * Class Sulfuras
 * @package App
 */
class Sulfuras
{

    public $quality;

    public $sellIn;

    /**
     * Sulfuras constructor.
     * @param $quality
     * @param $sellIn
     */
    public function __construct($quality, $sellIn)
    {
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public function tick()
    {

    }

}