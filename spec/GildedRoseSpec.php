<?php

namespace spec\App;


use App\GildedRose;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class GildedRoseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->beConstructedWith('normal',10,5);
        $this->shouldHaveType(GildedRose::class);
    }

    function it_updates_normal_items_before_sell_date()
    {
        $this->beConstructedWith('normal',10,5);
        $this->tick();
        $this->quality->shouldBe(9);
        $this->sellIn->shouldBe(4);
    }

    //limit case
    function it_updates_normal_items_on_sell_date()
    {
        $this->beConstructedWith('normal',10,0);
        $this->tick();
        $this->quality->shouldBe(8);
        $this->sellIn->shouldBe(-1);
    }

    function it_updates_normal_items_after_sell_date()
    {
        $this->beConstructedWith('normal',10,-5);
        $this->tick();
        $this->quality->shouldBe(8);
        $this->sellIn->shouldBe(-6);
    }

    function it_updates_normal_items_with_a_quality_of_0()
    {
        $this->beConstructedWith('normal',0,5);
        $this->tick();
        $this->quality->shouldBe(0);
        $this->sellIn->shouldBe(4);
    }
}
