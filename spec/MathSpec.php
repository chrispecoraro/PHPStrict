<?php

namespace spec\PHP7Strict;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class MathSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PHP7Strict\Math');
    }

    function it_should_add_two_or_more_integers()
    {
        $this->addIntegers(2, 3, 4)->shouldBe(9);
    }

    function it_should_add_two_or_more_floats()
    {
        $this->addFloats(2.0, 3.5, 4.5)->shouldBe(10.0);
    }

    function it_should_subtract_two_integers()
    {
        $this->subtractIntegers(10, 5)->shouldBe(5);
    }

    function it_should_subtract_two_floats()
    {
        $this->subtractFloats(9.5, 4.5)->shouldBe(5.0);
    }

    function it_should_multiply_two_integers()
    {
        $this->multiplyIntegers(10, 5)->shouldBe(50);
    }

    function it_should_multiply_two_floats()
    {
        $this->multiplyFloats(5.0, 2.5)->shouldBe(12.5);
    }

}