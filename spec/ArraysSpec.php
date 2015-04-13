<?php

namespace spec\CesarV\Helpers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ArraysSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('CesarV\Helpers\Arrays');
    }
    
    function it_should_pluck_values_out_of_arrays()
    {
        $subject = array(
            array('element' => 'A', 'other' => 'B'), 
            array('element' => 'B', 'blah' => 'B'), 
            array('element' => 'C', 'hello' => 'B'), 
            array('element' => 'D', 'brah' => 'B'), 
        );
        
        static::pluck('element', $subject)->shouldReturn(array('A', 'B', 'C', 'D'));
    }
}
